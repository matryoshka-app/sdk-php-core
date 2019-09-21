<?php

namespace Matryoshka;

use Matryoshka\Handlers\Handler;
use Matryoshka\Handlers\HandlerManager;
use Matryoshka\Request\Request;
use Matryoshka\Response\Response;

class Matryoshka {

    /**
     * @var HandlerManager
     */
    protected $handlerManager;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    public function __construct($request = []) {
        $this->handlerManager = new HandlerManager();
        $this->request = new Request($request);
        $this->response = null;
    }

    /**
     * Find and start needed Handler
     * @return array
     * @throws \Exception
     */
    public function start() {
        $class = $this->getHandlerManager()->getByURI($this->request->uri);

        /** @var Handler $handler */
        $handler = new $class($this->request);
        $handler->handler();
        $this->response = $handler->getResponse();

        return $this->response->toJSON();
    }

    public function getHandlerManager() {
        return $this->handlerManager;
    }

    public function getRequest() {
        return $this->request;
    }


}