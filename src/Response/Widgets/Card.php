<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class Card extends Widget {
    /** @var string Text */
    public $title;
    public $subtitle;
    public $type = 'card';
    public $uri;
    public $image;
    public $progressbar = false;
	public $buttons = [];

    public $style;

    public function __construct() {
        $this->style = new TextStyle();
    }

    public function toArray() {
        return [
            'type' => $this->type,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'payload' => $this->uri,
            'image' => $this->image,
            'progressbar' => $this->progressbar,
            'style' => $this->style->toArray(),
            'buttons' => $this->buttonsToArray(),
        ];
    }


    private function buttonsToArray() {
    	$buttons = [];
        foreach ($this->buttons as $button) {
        	$buttons[] = $button->toArray();
        }

        return $buttons;
	}
}