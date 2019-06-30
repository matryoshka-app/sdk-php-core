<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;
use \Matryoshka\Response\Widgets\Widget;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class InputText extends Widget {
    /** @var string Text */
    public $label;
    public $hint;
    public $key;
    public $value;
    public $type = 'input_text';

    public function __construct() {

    }

    public function toArray() {
        return [
            'type' => $this->type,
            'label' => $this->label,
            'label' => $this->hint,
            'value' => (string)$this->value,
            'key' => $this->key,
        ];
    }
}