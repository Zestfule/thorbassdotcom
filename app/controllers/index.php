<?php

class Index extends Zestify\Controller
{

    function __construct($action)
    {
        parent::__construct();
        if (!$action)
        {
            $this->index();
        } else {
            $this->$action();
        }
    }

    function index()
    {
        $this->view->msg = '<hr /> tehhee';
        $this->view->render('index');
    }

}