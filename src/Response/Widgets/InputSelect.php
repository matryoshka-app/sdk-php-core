<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;
use \Matryoshka\Response\Widgets\Widget;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class InputSelect extends Widget {
    /** @var string Text */
    public $title;
    public $key;
    public $value;
    public $type = 'input_select';
    public $options = [];

    public function __construct() {

    }

    public function toArray() {
        return [
            'type' => $this->type,
            'title' => $this->title,
            'key' => $this->key,
            'value' => $this->value,
            'options' => $this->options,
        ];
    }
}