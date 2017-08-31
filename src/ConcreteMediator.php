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
     * @param string $key
     * @param string $instance
     * @param string $method
     */
    public function addListener(string $key, string $instance, string $method): void
    {
        $this->instances[$key] = $instance;
        $this->methods[$key]   = $method;
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
     * @param string         $key
     * @param SomeEvent|null $event
     *
     * @return mixed
     */
    public function dispatch(string $key, SomeEvent $event = null)
    {
        $method = $this->getMethod($key);

        return $this->getListener($key)->$method($event);
    }

    /**
     * @param $key
     *
     * @return string
     */
    public function getMethod($key): string
    {
        return $this->methods[$key];
    }
}