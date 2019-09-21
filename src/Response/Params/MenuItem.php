<?php

namespace Matryoshka\Response\Params;

use Matryoshka\Response\Widgets\Text;

class MenuItem {
    /**
     * @var string HEX Color etc #000000
     */
    public $title;
    public $uri;
    public $progressbar = false;

    public function __construct(Text $title = null) {
        $this->title = $title;
    }

    public function toArray() {
        return [
            'title' => is_string($this->title) ? $this->title : $this->title->toArray() ,
            'payload' => $this->uri,
            'progressbar' => $this->progressbar,
        ];
    }


}