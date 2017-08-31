<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class MediatorTest extends PHPUnit_Framework_TestCase
{

    protected $mediator;

    protected $event;

    protected function setUp(): void
    {
        $this->mediator = new \Behavioral\Mediator\ConcreteMediator();
        $this->event    = new \Behavioral\Mediator\SomeEvent();
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(\Behavioral\Mediator\MediatorInterface::class, $this->getMediator());
        $this->assertInstanceOf(\Behavioral\Mediator\SomeEvent::class, $this->getEvent());
    }

    public function testDispatch(): void
    {
        $this->getMediator()->addListener('colleague_1', \Behavioral\Mediator\ConcreteColleague1::class, 'onEvent');
        $this->getMediator()->addListener('colleague_2', \Behavioral\Mediator\ConcreteColleague2::class, 'onEvent');
        $this->getMediator()->addListener('colleague_3', \Behavioral\Mediator\ConcreteColleague3::class, 'onEvent');

        ob_start();
        $this->getMediator()->dispatch('colleague_1', $this->getEvent());
        $colleague_1 = ob_get_clean();

        ob_start();
        $this->getMediator()->dispatch('colleague_2', $this->getEvent());
        $colleague_2 = ob_get_clean();

        ob_start();
        $this->getMediator()->dispatch('colleague_3', $this->getEvent());
        $colleague_3 = ob_get_clean();

        $this->assertEquals($colleague_1, "How are you?\n");
        $this->assertEquals($colleague_2, "Fine, thanks!\n");
        $this->assertEquals($colleague_3, "Fuck you all!\n");
    }

    /**
     * @return mixed
     */
    public function getMediator(): \Behavioral\Mediator\MediatorInterface
    {
        return $this->mediator;
    }

    /**
     * @return mixed
     */
    public function getEvent(): \Behavioral\Mediator\SomeEvent
    {
        return $this->event;
    }
}