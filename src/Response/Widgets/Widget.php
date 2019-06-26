<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
abstract class Widget {

    abstract function toArray();
}