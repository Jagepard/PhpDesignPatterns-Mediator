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
    private $listeners = [];

    /**
     * @param string $name
     * @param array  $listener
     */
    public function addListener(string $name, array $listener): void
    {
        if (count($listener) !== 2) {
            throw new \InvalidArgumentException();
        }

        $this->listeners[$name] = $listener;
    }

    /**
     * @param string                $name
     * @param HandlerInterface|null $handler
     * @return mixed
     */
    public function dispatch(string $name, HandlerInterface $handler = null)
    {
        return $this->listeners[$name][0]->{$this->listeners[$name][1]}($handler);
    }
}
