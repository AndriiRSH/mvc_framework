<?php

namespace application\core;

use application\lib\Db;

abstract class Models
{
    public $db;

    public function __construct()
    {
        $this->db = new Db;
    }
}