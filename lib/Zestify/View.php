<?php

namespace Zestify;

class View
{

    /**
     * @var array Files to be included into the view
     */
    private $_render = [];

    /**
     * @var array Variables to be made use of by the Views
     */
    public $_display = [];

    /**
     *
     */
    function __construct()
    {

        $this->_display['websiteURL'] = WEBSITE_URL;

    }

    /**
     * @param $view
     */
    public function addView($view)
    {
        $this->_render[] = $view;
    }

    /**
     *
     */
    public function render()
    {
        foreach ($this->_render as $view)
        {
            require VIEW_DIRECTORY . DIRECTORY_SEPARATOR . $view;
        }
    }

}
