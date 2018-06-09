<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator\Tests;

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
     * @var
     */
    protected $event;
    /**
     * @var ConcreteMediator
     */
    protected $mediator;

    protected function setUp(): void
    {
        $this->mediator = new ConcreteMediator();
        $this->event    = new SomeHandler();
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(MediatorInterface::class, $this->mediator);
        $this->assertInstanceOf(SomeHandler::class, $this->event);
    }

    public function testDispatch(): void
    {
        $this->mediator->addListener('colleague_1', ConcreteColleague1::class, 'onEvent');
        $this->mediator->addListener('colleague_2', ConcreteColleague2::class, 'onEvent');
        $this->mediator->addListener('colleague_3', ConcreteColleague3::class, 'onEvent');

        ob_start();
        $this->mediator->dispatch('colleague_1', $this->event);
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch('colleague_2', $this->event);
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->mediator->dispatch('colleague_3', $this->event);
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "How are you?\n");
        $this->assertEquals($colleague_2, "Fine, thanks!\n");
        $this->assertEquals($colleague_3, "Fuck you all!\n");
    }
}