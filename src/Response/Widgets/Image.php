<?php

namespace Matryoshka\Response\Widgets;

use Matryoshka\Response\Params\TextStyle;

/**
 * Text widget
 * Doc: https://matryoshka.app/docs/5
 * @package Matryoshka\Response\Widgets
 */
class Image extends Widget {

	const FILLABLE_FILL = 'fill';
	const FILLABLE_CONTAIN = 'contain';
	const FILLABLE_COVER = 'cover';
	const FILLABLE_FILL_WIDTH = 'fill_width';
	const FILLABLE_FILL_HEIGHT = 'fill_height';

    /** @var string Text */
    public $image;
    public $type = 'image';
    public $width;
    public $height;

    public $fillable;
    

    public $style;

    public function __construct($image = null) {
        $this->image = $image;
    }

    public function toArray() {
        return [
            'type' => $this->type,
            'image' => $this->image,
            'width' => $this->width,
            'height' => $this->height,
            'fillable' => $this->fillable,
        ];
    }
}