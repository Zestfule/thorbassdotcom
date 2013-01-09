<?php

class Index extends Zestify\Controller
{

    function __construct($action)
    {
        parent::__construct($action);
    }

    function index()
    {
        $this->_view->_display['pageTitle'] = 'Index';

        $this->_view->addView('header.php');
        $this->_view->addView('index/index.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

}