<?php

namespace Zestify;

class Controller
{

    public $_models = [];

    function __construct($action = 'index')
    {
        $this->view = new View();
        $this->$action();
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

}
