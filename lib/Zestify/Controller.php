<?php

namespace Zestify;

class Controller
{

    public $_models = [];

    public $_defaultAction = 'index';

    public $_view;

    function __construct($action)
    {
        $this->_view = new View();
        if (isset($action)) {
            echo 'set';
            $this->$action();
        } else {
            echo 'notset';
            call_user_func($this->_defaultAction);
            // $this->$action(); ?!?!?
        }
    }

    public function loadModel($model)
    {
        $path = MODEL_DIRECTORY . DIRECTORY_SEPARATOR . $model . '.php';
        if (file_exists($path)) {
            require $path;
            $model2 = $model . 'Model';
            $this->_models[$model] = new $model2;
            return $this->_models[$model];
        } else {
        }
    }

    public function setDefaultAction($action)
    {
        $this->_defaultAction = (string)$action;
    }

    public function callAction($action)
    {
    }

}
