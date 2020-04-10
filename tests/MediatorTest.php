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

    public function testDispatch(): void
    {
        $this->mediator->addListener('colleague_1', [new Colleague1(), 'onEvent']);
        $this->mediator->addListener('colleague_2', [new Colleague2(), 'onEvent']);
        $this->mediator->addListener('colleague_3', [Colleague3::class, 'onEvent']);

        ob_start();
        $this->mediator->notify('colleague_1', $this->handler);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->notify('colleague_2', $this->handler);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->notify('colleague_3', $this->handler);
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "Colleague1: reacts on notify\n");
        $this->assertEquals($colleague_2, "Colleague2: reacts on notify\n");
        $this->assertEquals($colleague_3, "Colleague3: reacts on notify\n");
    }
}
