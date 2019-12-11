<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator\Tests;

use Behavioral\Mediator\HandlerInterface;
use Behavioral\Mediator\Handler;
use Behavioral\Mediator\Mediator;
use Behavioral\Mediator\MediatorInterface;
use Behavioral\Mediator\Colleague1;
use Behavioral\Mediator\Colleague2;
use Behavioral\Mediator\Colleague3;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MediatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var HandlerInterface
     */
    private $handler;
    /**
     * @var MediatorInterface
     */
    private $mediator;

    protected function setUp(): void
    {
        $this->handler = new Handler();
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
        $this->mediator->dispatch('colleague_1', $this->handler);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch('colleague_2', $this->handler);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch('colleague_3', $this->handler);
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "Colleague1: How are you?\n");
        $this->assertEquals($colleague_2, "Colleague2: Fine, thanks!\n");
        $this->assertEquals($colleague_3, "Colleague3: Fuck you all!\n");
    }
}
