<?php

namespace Matryoshka\Request;

/**
 * Class User
 * @package Matryoshka\Request
 */
class User {

    /**
     * User public name
     * @var string
     */
    public $name;

    /**
     * User ID
     * @var int
     */
    public $id;
    
    /**
     * User lang
     * @var int
     */
    public $lang;

    /**
     * User constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct($id, $name, $lang) {
        $this->name     = $name;
        $this->id       = $id;
        $this->lang     = $lang;
    }

}