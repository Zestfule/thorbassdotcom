<?php

namespace Zestify;

class Bootstrap
{

    protected $_url;
    protected $_urlArray;
    protected $_controller;
    protected $_action;
    protected $_args;

    function __construct()
    {

        // Trim the beginning or end slashes off the url
        $this->_url = trim($_GET['_url'], '/');
        // If url is empty, set array to null
        $this->_urlArray = ($this->_url != '') ? explode('/', $this->_url) : null;

        $this->setController();
        $this->setAction();

        $file = CONTROLLER_DIRECTORY . DIRECTORY_SEPARATOR . $this->getController() . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new \Exception('Controller does not exist.  Sorry!');
        }

        new $this->_controller($this->getAction());

    }

    function getController()
    {
        //isset($this->_controller) ? return $this->_controller : return false;
        if (isset($this->_controller)) {
            return $this->_controller;
        } else {
            return false;
        }
    }
    function setController($or = false)
    {

        if (!$or)
        {
            if (isset($this->_urlArray[0])) {
                $this->_controller = $this->_urlArray[0];
                return true;
            } else {
                $this->_controller = DEFAULT_CONTROLLER;
                return true;
            }
        } else {
            // TODO: Check if controller is valid, force override.
        }

    }

    function getAction()
    {
        if (isset($this->_action)) {
            return $this->_action;
        } else {
            return false;
        }
    }
    function setAction($or = false)
    {

        if (!$or)
        {
            if (isset($this->_urlArray[1])) {
                $this->_action = $this->_urlArray[1];
                return true;
            } else {
                return false;
            }
        } else {
            // TODO: Check if action is valid, force override.
        }

    }

}