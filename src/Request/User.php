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
     * User constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct($id, $name) {
        $this->name = $name;
        $this->id   = $id;
    }

}