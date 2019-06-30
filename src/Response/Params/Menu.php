<?php


namespace Matryoshka\Response\Params;


class Menu {

    protected $items = [];

    public function add(MenuItem $item) {
        $this->items[] = $item;
    }

    public function toArray() {
        $res = [];
        foreach ($this->items as $item) {
            /** @var MenuItem $item  */
            $res[] = $item->toArray();
        }

        return $res;
    }
}