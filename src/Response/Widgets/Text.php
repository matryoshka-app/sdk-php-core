<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class Text extends Widget {
    /** @var string Text */
    public $text;

    public $style;

    public function __construct(string $text) {
        $this->text = $text;
        $this->style = new TextStyle();
    }

    public function toArray() {
        return [
            'text' => $this->text,
            'style' => $this->style->toArray(),
        ];
    }
}