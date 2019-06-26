<?php


namespace Matryoshka\Response;


use Matryoshka\Response\Params\Style;
use Matryoshka\Response\Params\Menu;


class Response {
    public $id = 0;
    protected $type;
    public $style;
    public $menu = [];

    public function __construct() {
        $this->style = new Style();
        $this->menu = new Menu();
    }

    public function toJSON() {
        return json_encode($this->toArray());
    }

    public function toArray() {

        return [
            'id' => $this->id,
            'type' => $this->type,
            'style' => [
                'background' => $this->style->background,
                'color' => $this->style->color,
            ],
            'menu' => $this->menu->toArray(),
        ];
    }
}