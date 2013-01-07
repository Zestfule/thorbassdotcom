<?php

namespace Zestify;

class Model
{

    public $_db;

    public function __construct()
    {
        $this->_db = new Database();
    }

}
