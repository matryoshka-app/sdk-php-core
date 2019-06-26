<?php

namespace Matryoshka\Response\Params;

use Matryoshka\Response\Widgets\Text;

class MenuItem {
    /**
     * @var string HEX Color etc #000000
     */
    public $title;
    public $payload;
    public $progressbar = false;

    public function __construct(Text $title = null) {
        $this->title = $title;
    }

    public function toArray() {
        return [
            'title' => $this->title->toArray() ,
            'payload' => $this->payload,
            'progressbar' => $this->progressbar,
        ];
    }


}