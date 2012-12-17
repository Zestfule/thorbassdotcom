<?php

namespace Zestify;

class View
{

    function __construct()
    {
    }

    public function render($controller)
    {
        require VIEW_DIRECTORY . DIRECTORY_SEPARATOR . $controller . DIRECTORY_SEPARATOR
                               . $controller . '.php';
    }

}
