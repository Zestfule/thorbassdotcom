<?php

class login extends Zestify\Controller
{

    function __construct($action)
    {
        $this->loadModel('login');
        parent::__construct($action);
    }

    function index()
    {
        $this->view->_display['pageTitle'] = ' - Login';

        $this->view->addView('header.php');
        $this->view->addView('login/index.php');
        $this->view->addView('footer.php');

        $this->view->render();
    }

    public function auth()
    {

        $this->view->_display['pageTitle'] = ' - Authorizing';
        $this->_models['login']->auth($_POST['emailAddress'], $_POST['password']);

    }

}
