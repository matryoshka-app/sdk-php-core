<?php

namespace Matryoshka\Handlers;

use \Matryoshka\Request\Request;
use Matryoshka\Response\Types\ResponseFull;

/**
 * Base Matryoshka Controller
 */
abstract class Handler {

    /**
     * Request data
     * @var Request
     */
    protected $request;

    /**
     * Prepare response
     * @var
     */
    protected $response;

    /**
     * Controller constructor.
     * @param Request $request
     */
    function __construct(Request $request) {
        $this->request = $request;
        $this->response = new ResponseFull();
    }

    /**
     *
     * @param Request $request
     */
    public function setRequest(Request $request) {
        $this->request = $request;
    }

    /**
     *
     */
    public function getResponse() {

       return $this->response;
    }

    /**
     * URI name of virtual route for handler. Example 'catalog/items/12'
     * @return string
     */
    abstract static function getURI();

    /**
     * @param array $query
     * @return mixed
     */
    abstract function handler();


}