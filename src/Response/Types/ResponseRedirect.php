<?php

namespace Matryoshka\Response\Types;

use Matryoshka\Response\Response;
use Matryoshka\Response\Widgets\Widget;

/**
 * Full type response. Widget class All existing classes are described in this documentation.
 * More: https://matryoshka.app/docs/8
 * Class ResponseFull
 * @package Matryoshka\Response\Types
 */

class ResponseRedirect extends Response {
    protected  $type = 'redirect';
    public  $uri = '';
    public  $notify = null;


    public function toArray() {
        $res = parent::toArray();
        $res['payload'] = $this->uri;
        $res['notify'] = $this->notify;
        return $res;
    }

}