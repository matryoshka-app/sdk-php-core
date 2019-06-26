<?php


namespace Matryoshka\Handlers;


class HandlerManager {

    protected $handlers = [];

    /**
     * Add Handler
     * @param string $classname
     * @throws \Exception
     */
    public function addHandler(string $classname) {
        if(!class_exists($classname)) {
            throw new \Exception("{$classname} is not class");
        }

        if (!method_exists($classname, 'getURI')) {
            throw new \Exception('getURI() must be defined in Matryoshka Handler');
        }

        if (!$uri = $classname::getURI()) {
            throw new \Exception('getURI() must return some string');
        }

        if (!is_string($uri)) {
            throw new \Exception('getURI() must return a string');
        }

        if (isset($this->handlers[$uri])) {
            throw new \Exception($uri.' handler already registered');

        }
            $this->handlers[$classname::getURI()] = $classname;


    }

    /**
     * Add Many Handlers
     * @param array $classnames
     * @throws \Exception
     */
    public function addHandlers(array $classnames) :void {
        foreach ($classnames as $classname) {
            $this->addHandler($classname);
        }
    }

    /**
     * return all registered handlers
     * @return array
     */
    public function getHandlers() : array {
        return $this->handlers;
    }

    /**
     * Get handler by uri
     * @param string $uri
     * @return string Class Handler
     * @throws \Exception
     */
    public function getByURI(string $uri) {

        $handlers = $this->getHandlers();
        if (!isset($handlers[$uri])) {
            throw new \Exception("handler for '{$uri}'' not registered");
        }
        $class = $handlers[$uri];
        return $class;
    }

}