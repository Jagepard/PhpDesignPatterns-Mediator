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
        $this->mediator = new Mediator();
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(MediatorInterface::class, $this->mediator);
        $this->assertInstanceOf(Handler::class, $this->handler);
    }

    public function testDispatch(): void
    {
        $this->mediator->addListener(Colleague1::class, "toAnswer");
        $this->mediator->addListener(Colleague2::class, "toReact");
        $this->mediator->addListener(Colleague3::class, "sendToHell");

        ob_start();
        $this->mediator->dispatch(Colleague1::class);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch(Colleague2::class);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch(Colleague3::class);
        $colleague_3 = ob_get_clean();

        $this->assertEquals("Behavioral\Mediator\Colleague1: Alerted!\n", $colleague_1);
        $this->assertEquals("Behavioral\Mediator\Colleague2: Alerted!\n", $colleague_2);
        $this->assertEquals("Behavioral\Mediator\Colleague3: Alerted!\n", $colleague_3);
    }
}
