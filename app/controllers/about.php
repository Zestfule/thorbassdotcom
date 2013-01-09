<?php

class About extends Zestify\Controller
{

    function __construct($action)
    {
        parent::__construct($action);
    }

    function index()
    {
        $this->_view->_display['pageTitle'] = 'About';

        $this->_view->addView('header.php');
        $this->_view->addView('about/index.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

    function design()
    {
        $this->_view->_display['pageTitle'] = 'Design';

        $this->_view->addView('header.php');
        $this->_view->addView('about/design.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

    function materials()
    {
        $this->_view->_display['pageTitle'] = 'Materials';

        $this->_view->addView('header.php');
        $this->_view->addView('about/materials.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

    function electronics()
    {
        $this->_view->_display['pageTitle'] = 'Electronics';

        $this->_view->addView('header.php');
        $this->_view->addView('about/electronics.php');
        $this->_view->addView('footer.php');

        $this->_view->render();
    }

}