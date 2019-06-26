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
        foreach ($data as $input) {
            $this->data[$input['key']] = $input;
        }
    }

    /**
     * Return raw array of the input
     * @param $key
     * @return array
     * @throws \Exception
     */
    public function getRaw($key) {
        if (!isset($this[$key])) {
            throw new \Exception("key $key not exists");
        }
        return $this[$key];
    }

    /**
     * Return only value of the input
     *
     * @param $key
     * @return string
     * @throws \Exception
     */
    public function value($key) {
        $input = $this->getRaw($key);
        return $input['value'];
    }


    /**
     * @param $name string Field Key
     * @return string
     * @throws \Exception
     */
    public function __get($name)
    {
        return $this->value($name);
    }
}