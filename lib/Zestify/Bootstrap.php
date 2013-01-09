<?php

namespace Zestify;
use controllers;

class Bootstrap
{

    /**
     * @var string The base url passed from mod_rewrite
     */
    protected $_url;

    /**
     * @var array|null The initial broken up url by /
     */
    protected $_urlArray;

    /**
     * @var string The controller from the url
     */
    protected $_controller;

    /**
     * @var string The action from the url
     */
    protected $_action;

    /**
     * @var array The arguments specified from the url
     */
    protected $_args;

    /**
     *
     */
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

    /*
     *
     */
    function getController()
    {
        //isset($this->_controller) ? return $this->_controller : return false;
        if (isset($this->_controller)) {
            return $this->_controller;
        } else {
            return false;
        }
    }

    /**
     * @param bool $or
     *
     * @return bool
     */
    function setController($or = false)
    {

        if (!$or)
        {
            if (isset($this->_urlArray[0])) {
                $this->_controller = (string)$this->_urlArray[0];
                return true;
            } else {
                $this->_controller = DEFAULT_CONTROLLER;
                return true;
            }
        } else {
            // TODO: Check if controller is valid, force override.
        }

    }

    /**
     * @return bool
     */
    function getAction()
    {
        return $this->_action;
    }

    /**
     * @param bool $or
     *
     * @return bool
     */
    function setAction($or = false)
    {

        if (!$or)
        {
            if (isset($this->_urlArray[1])) {
                $this->_action = (string)$this->_urlArray[1];
            } else {
                $this->_action = null;
            }
        } else {
            // TODO: Check if action is valid, force override.
        }

    }

}