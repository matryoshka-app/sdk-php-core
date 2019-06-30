<?php


namespace Matryoshka\Request;

/**
 * Class Input
 * @package Matryoshka\Request
 */
class Input {
    /**
     * Input data
     * @var array
     */
    protected $data;

    /**
     * Input constructor.
     * @param $data
     */
    public function __construct($data) {

        foreach ($data as $key => $input) {
            $this->data[$key] = $input;
        }
    }

    /**
     * Return raw array of the input
     * @param $key
     * @return string
     * @throws \Exception
     */
    public function getRaw($key) {
        return $this->data[$key] ?? null;
    }

    /**
     * Return only value of the input
     *
     * @param $key
     * @return string
     * @throws \Exception
     */
    public function value($key) {
        return $this->getRaw($key);
    }


    /**
     * @param $name string Field Key
     * @return string
     * @throws \Exception
     */
    public function __get($key)
    {
        return $this->value($key);
    }

    public function __isset($name)
    {
        return (bool)$this->value($key);
    }
}