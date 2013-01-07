<?php

class Index extends Zestify\Controller
{

    function __construct($action)
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->_display['pageTitle'] = ' - Index';

        $this->view->addView('header.php');
        $this->view->addView('index/index.php');
        $this->view->addView('footer.php');

        $this->view->render();
    }

}