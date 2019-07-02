<?php

/**
 *
 */
namespace Matryoshka\Response\Params;

class Style {
    /**
     * @var string HEX Color etc #000000
     */
    public $color;

    /**
     * @var string image url
     */
    public $background;

    public function toArray() {
    	return [
    		'color' => $this->color,
		    'background' => $this->background,
	    ];
    }

}