<?php
namespace Matryoshka\Request;

/**
 * Class Request
 * @package Matryoshka
 */
class Request {

    public $input;
    public $user;
    public $payload;
    public $uri;
    public $query = [];

    /**
     * Request constructor.
     * @param array $request
     * @throws \Exception
     */
    public function __construct($request = []) {
        if (!$request) {
            $request = $_POST;
        }

        if (!isset($request['input'], $request['user'])) {
            throw new \Exception('request is invalid');
        }

        $input = json_decode($request['input'], true);
        $this->input = new Input($input);
        $this->user = new User($request['user']['id'], $request['user']['name'], $request['user']['lang']);
        $this->payload = $request['payload'] ?? '';
        $this->parseURI();
    }

    /**
     * Parse payload uri to array
     * @param string $uri
     * @return void
     */
    public function parseURI() {
        $res = parse_url($this->payload);
        $uri = $res['path'] ?? null;
        $queryString = $res['query'] ?? $res['fragment'];
        \parse_str($queryString, $query);
        $this->query = $query;
        $this->uri = $uri;
    }
}