<?php


namespace Matryoshka\Mocks;


use Matryoshka\Handlers\Handler;
use Matryoshka\Response\Params\MenuItem;
use Matryoshka\Response\Types\ResponseFull;
use Matryoshka\Response\Widgets\Text;

class MockHandler extends Handler {

    /**
     * URI name of virtual route for handler. Example 'catalog/items/12'
     * @return string
     */
    static function getURI() {
        return 'test/1';
    }

    /**
     * @return void
     */
    function handler() {
        $menuItem = new MenuItem();
        $menuItem->title = new Text('test');
        /** @var ResponseFull $response */
        $response = $this->getResponse();
        $response->menu->add($menuItem);
        $response->addWidget(new Text('testim'));
    }

}