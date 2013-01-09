<?php

namespace Zestify;

class Controller
{

    /**
     * @var array
     */
    public $_models = [];

    /**
     * @var string
     */
    public $_defaultAction = 'index';

    /**
     * @var View
     */
    public $_view;

    /**
     * Dah constructahhh
     * @param $action
     */
    function __construct($action)
    {
        // create the view object
        $this->_view = new View();
        $this->_view->setNavigation(get_class($this));
        //check if there's an action specified in the url
        if (isset($action)) {
            //if there is call it!
            $this->$action();
        } else {
            //if not use the default action
            $defaultAction = $this->_defaultAction;
            $this->$defaultAction();
        }
    }

    /**
     * Loads the model for the particular controller
     * @param $model
     *
     * @return mixed
     */
    public function loadModel($model)
    {
        // build the path to the model class
        $path = MODEL_DIRECTORY . DIRECTORY_SEPARATOR . $model . '.php';
        // check if it exists
        if (file_exists($path)) {
            require $path;
            $model2 = $model . 'Model';
            //create the model
            $this->_models[$model] = new $model2;
            return $this->_models[$model];
        } else {
            //TODO: Error file doesn't exist!
        }
    }

    /**
     * set what the default action is
     * @param $action
     */
    public function setDefaultAction($action)
    {
        // set the variable and typecast it to string just to be sure
        $this->_defaultAction = (string)$action;
    }

}
