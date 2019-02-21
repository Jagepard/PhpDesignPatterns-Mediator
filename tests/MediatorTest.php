<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator\Tests;

use Behavioral\Mediator\HandlerInterface;
use Behavioral\Mediator\SomeHandler;
use Behavioral\Mediator\ConcreteMediator;
use Behavioral\Mediator\MediatorInterface;
use Behavioral\Mediator\ConcreteColleague1;
use Behavioral\Mediator\ConcreteColleague2;
use Behavioral\Mediator\ConcreteColleague3;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class MediatorTest
 * @package Behavioral\Mediator\Tests
 */
class MediatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var HandlerInterface
     */
    protected $handler;
    /**
     * @var MediatorInterface
     */
    protected $mediator;

    protected function setUp(): void
    {
        $this->handler  = new SomeHandler();
        $this->mediator = new ConcreteMediator();
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(MediatorInterface::class, $this->mediator);
        $this->assertInstanceOf(SomeHandler::class, $this->getHandler());
    }

    public function testDispatch(): void
    {
        $this->getMediator()->addListener('colleague_1', [new ConcreteColleague1(), 'onEvent']);
        $this->getMediator()->addListener('colleague_2', [new ConcreteColleague2(), 'onEvent']);
        $this->getMediator()->addListener('colleague_3', [ConcreteColleague3::class, 'onEvent']);

        ob_start();
        $this->getMediator()->dispatch('colleague_1', $this->getHandler());
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->getMediator()->dispatch('colleague_2', $this->getHandler());
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->getMediator()->dispatch('colleague_3', $this->getHandler());
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "How are you?\n");
        $this->assertEquals($colleague_2, "Fine, thanks!\n");
        $this->assertEquals($colleague_3, "Fuck you all!\n");
    }

    /**
     * @return HandlerInterface
     */
    public function getHandler(): HandlerInterface
    {
        return $this->handler;
    }

    /**
     * @return MediatorInterface
     */
    public function getMediator(): MediatorInterface
    {
        return $this->mediator;
    }
}
