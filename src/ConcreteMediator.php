<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteMediator
 *
 * @package Behavioral\Mediator
 */
class ConcreteMediator implements MediatorInterface
{

    /**
     * @var array
     */
    protected $instances = [];

    /**
     * @var array
     */
    protected $methods = [];

    /**
     * @param string $listener
     * @param string $instance
     * @param string $event
     */
    public function addListener(string $listener, string $instance, string $event): void
    {
        $this->instances[$listener] = $instance;
        $this->methods[$listener]   = $event;
    }

    /**
     * @param string $key
     *
     * @return ColleagueInterface
     */
    public function getListener(string $key): ColleagueInterface
    {
        return new $this->instances[$key]();
    }

    /**
     * @param string         $listener
     * @param SomeEvent|null $event
     *
     * @return mixed
     */
    public function dispatch(string $listener, SomeEvent $event = null)
    {
        $method = $this->getMethod($listener);

        return $this->getListener($listener)->$method($event);
    }

    /**
     * @param string $listener
     * @return string
     */
    public function getMethod(string $listener): string
    {
        return $this->methods[$listener];
    }
}
