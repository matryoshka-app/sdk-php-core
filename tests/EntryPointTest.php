<?php

require_once '../vendor/autoload.php';

use Matryoshka\Mocks\MockHandler;

use PHPUnit\Framework\TestCase;
use Matryoshka\Matryoshka;

class MatryoshkaTest  extends TestCase {

    public function testStart() {
        $request = [
            'input' => [],
            'user' => [
                'id' => 1,
            ],
            'payload' => 'test/1?id=12&re=1',
        ];
        $matryoshka = new Matryoshka($request);
        $matryoshka->getHandlerManager()->addHandler(MockHandler::class);
//        var_dump($matryoshka->start());exit;
        $this->assertArrayHasKey('type', $matryoshka->start());
    }
}