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

class ResponseFull extends Response {
    protected $type = 'full';
    protected $elements = [];

    public function addWidget(Widget $widget) {
        $this->elements[] = $widget;
    }

    public function toArray() {
        $res = parent::toArray();
        foreach ($this->elements as $element) {
            $res['elements'][] = $element->toArray();
        }

        return $res;
    }

}