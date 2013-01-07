<?php

class login extends Zestify\Controller
{

    function __construct($action)
    {
        var_dump($action);
        parent::__construct($action);
        $this->loadModel('login');
    }

    function index()
    {
        $this->_view->_display['pageTitle'] = ' - Login';

        $this->_view->addView('header.php');
        $this->_view->addView('login/index.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

    public function auth()
    {

        $this->_view->_display['pageTitle'] = ' - Authorizing';
        $this->_models['login']->auth($_POST['emailAddress'], $_POST['password']);

    }

}
