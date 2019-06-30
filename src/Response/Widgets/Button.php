<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class Button extends Widget {
    /** @var string Text */
    public $title;
    public $type = 'button';
    public $uri;
    public $progressbar = false;

    public $style;

    public function __construct() {
        $this->style = new TextStyle();
    }

    public function toArray() {
        return [
            'type' => $this->type,
            'title' => $this->title,
            'payload' => $this->uri,
            'progressbar' => $this->progressbar,
            'style' => $this->style->toArray(),
        ];
    }
}