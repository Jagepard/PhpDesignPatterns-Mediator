<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator\Tests;

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Behavioral\Mediator\{
    HandlerInterface,
    Handler,
    Mediator,
    MediatorInterface,
    Colleague1,
    Colleague2,
    Colleague3
};

class MediatorTest extends PHPUnit_Framework_TestCase
{
    private HandlerInterface  $handler;
    private MediatorInterface $mediator;

    protected function setUp(): void
    {
        $this->handler  = new Handler();
        $this->mediator = new Mediator();
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(MediatorInterface::class, $this->mediator);
        $this->assertInstanceOf(Handler::class, $this->handler);
    }

    public function testNotify(): void
    {
        $listener1 = new Colleague1();
        $listener2 = new Colleague2();
        $listener3 = new Colleague3();

        $this->mediator->addListener($listener1, "toAnswer");
        $this->mediator->addListener($listener2, "toReact");
        $this->mediator->addListener($listener3, "sendToHell");

        ob_start();
        $this->mediator->notify($listener1, $this->handler);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->notify($listener2, $this->handler);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->notify($listener3, $this->handler);
        $colleague_3 = ob_get_clean();

        $this->assertEquals("Behavioral\Mediator\Colleague1: Fine, thanks!\n", $colleague_1);
        $this->assertEquals("Behavioral\Mediator\Colleague2: Thank you, everything is OK!\n", $colleague_2);
        $this->assertEquals("Behavioral\Mediator\Colleague3: Go to hell!\n", $colleague_3);
    }
}
