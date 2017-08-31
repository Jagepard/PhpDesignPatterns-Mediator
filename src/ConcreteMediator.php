<?php
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

    protected $instances = [];

    protected $methods = [];

    public function addListener(string $key, $instance, $method)
    {
        $this->instances[$key] = $instance;
        $this->methods[$key]   = $method;
    }

    public function getListener(string $key)
    {
        return new $this->instances[$key]();
    }

    public function dispatch(string $key, SomeEvent $event = null)
    {
        $method = $this->getMethod($key);

        return $this->getListener($key)->$method($event);
    }

    public function getInstance($key)
    {
        return $this->instances[$key];
    }

    public function getMethod($key)
    {
        return $this->methods[$key];
    }
}