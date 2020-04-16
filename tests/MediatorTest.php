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
        $this->mediator->addListener(new Colleague1(), "onEvent");
        $this->mediator->addListener(new Colleague2(), "onEvent");
        $this->mediator->addListener(new Colleague3(), "onEvent");

        ob_start();
        $this->mediator->notify(Colleague1::class, $this->handler);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->notify(Colleague2::class, $this->handler);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->notify(Colleague3::class, $this->handler);
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "Behavioral\Mediator\Colleague1: Fine, thanks!\n");
        $this->assertEquals($colleague_2, "Behavioral\Mediator\Colleague2: Fine, thanks!\n");
        $this->assertEquals($colleague_3, "Behavioral\Mediator\Colleague3: Fine, thanks!\n");
    }
}
