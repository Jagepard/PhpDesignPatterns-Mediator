<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteMediator
 * @package Behavioral\Mediator
 */
class ConcreteMediator implements MediatorInterface
{

    /**
     * @var array
     */
    protected $events = [];
    /**
     * @var array
     */
    protected $instances = [];

    /**
     * @param string $listener
     * @param string $instance
     * @param string $event
     */
    public function addListener(string $listener, string $instance, string $event): void
    {
        $this->events[$listener]    = $event;
        $this->instances[$listener] = $instance;
    }

    /**
     * @param string           $listener
     * @param HandlerInterface|null $handler
     * @return mixed
     */
    public function dispatch(string $listener, HandlerInterface $handler = null)
    {
        $method   = $this->events[$listener];
        $listener = new $this->instances[$listener]();

        return $listener->$method($handler);
    }
}
