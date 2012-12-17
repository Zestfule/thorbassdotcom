<?php

namespace Zestify\Bootstrap;

class Bootstrap
{

    protected $_url;
    protected $_controller;
    protected $_action;
    protected $_args;

    function __construct()
    {

        $this->_url = $_GET['url'];
        $this->_urlArray = explode('/', rtrim($this->_url, '/'));

        $controller  = $urlArray[0];
        array_shift($urlArray);
        $action      = $urlArray[0];
        array_shift($urlArray);
        $queryString = $urlArray;

        $controllerName = $controller;
        $controller = ucwords($controller);
        $model = rtrim($controller, 's');
        $controller .= 'Controller';
        $dispatch = new $controller($model,$controllerName,$action);

        if ((int)method_exists($controller, $action)) {
            call_user_func_array(array($dispatch,$action), $queryString);
        } else {
            // Error 404?
        }

    }

    function getController()
    {
        return $this->_urlArray[0];
    }
    function setController()
    {
        if (is_array($this->_urlArray)) {
            $this->_controller = $this->_urlArray[0];
            return true;
        } else {
            return false;
        }
    }

    function getAction()
    {
        return $this->_urlArray[1];
    }

}