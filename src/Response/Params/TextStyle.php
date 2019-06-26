<?php

/**
 *
 */
namespace Matryoshka\Response\Params;

class TextStyle {
    /**
     * @var string HEX Color etc #000000. Default black or color from main style
     */
    public $color;

    /**
     * @var boolean
     */
    public $bold = false;

    /**
     * @var boolean
     */
    public $italic = false;

    /**
     * @var integer
     */
    public $size = 14;

    /**
     * @var boolean
     */
    public $center = false;

    public function toArray() {
        return [
            'color' => $this->color,
            'bold' => $this->bold,
            'italic' => $this->italic,
            'size' => $this->size,
        ];
    }


}