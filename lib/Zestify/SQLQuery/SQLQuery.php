<?php

namespace Zestify\SQLQuery;

class SQLQuery
{

    protected $_dbHandle;
    protected $_result;

    /*
     * Connect to the database
     */
    function connect($address, $user, $password, $database)
    {

        $this->_dbHandle = @mysql_connect($address, $user, $password);
        if ($this->_dbHandle != 0) {
            if (mysql_select_db($database, $this->_dbHandle)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    /*
     * Disconnect from the database
     */
    function disconnect() {

        if (@mysql_close($this->_dbHandle) != 0) {
            return true;
        } else {
            return false;
        }

    }

    /*
     * Select all from a table
     */
    function selectAll()
    {

        $query = 'select * from `' . $this->_table . '`';
        return $this->query($query);

    }

    /*
     * Select single row
     */
    function select($id)
    {

        $query = 'select * from `' . $this->_table . '` where `id` = \''
                        . mysql_real_escape_string($id).'\'';

    }

    /*
     * Custom Query
     */
    function query($query, $singleResult = 0)
    {

        $this->_result = mysql_query($query, $this->_dbHandle);

        if (preg_match("/select/i",$query)) {
            $result = array();
            $table = array();
            $field = array();
            $tempResults = array();
            $numOfFields = mysql_num_fields($this->_result);
            for ($i = 0; $i < $numOfFields; ++$i) {
                array_push($table,mysql_field_table($this->_result, $i));
                array_push($field,mysql_field_name($this->_result, $i));
            }

            while ($row = mysql_fetch_row($this->_result)) {
                for ($i = 0;$i < $numOfFields; ++$i) {
                    $table[$i] = trim(ucfirst($table[$i]),"s");
                    $tempResults[$table[$i]][$field[$i]] = $row[$i];
                }
                if ($singleResult == 1) {
                    mysql_free_result($this->_result);
                    return $tempResults;
                }
                array_push($result,$tempResults);
            }
            mysql_free_result($this->_result);
            return($result);
        }

    }

    /** Get number of rows **/
    function getNumRows() {
        return mysql_num_rows($this->_result);
    }

    /** Free resources allocated by a query **/

    function freeResult() {
        mysql_free_result($this->_result);
    }

    /** Get error string **/

    function getError() {
        return mysql_error($this->_dbHandle);
    }

}
