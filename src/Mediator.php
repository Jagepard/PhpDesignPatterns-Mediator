<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    private array $listeners = [];

    /**
     * @param  string  $name
     * @param  array  $listener
     */
    public function addListener(string $name, array $listener): void
    {
        if (count($listener) !== 2) {
            throw new \InvalidArgumentException('Array must have two elements');
        }

        if (array_key_exists($name, $this->listeners)) {
            throw new \InvalidArgumentException('Listener already exists');
        }

        $this->listeners[$name] = $listener;
    }

    /**
     * @param  string  $name
     * @param  HandlerInterface|null  $handler
     * @return mixed
     */
    public function dispatch(string $name, HandlerInterface $handler = null)
    {
        if (array_key_exists($name, $this->listeners)) {
            $class = $this->listeners[$name][0];
            $method = $this->listeners[$name][1];

            if (is_string($class) && class_exists($class)) {
                return (new $class())->$method($handler);
            }

            return $class->$method($handler);
        }

        throw new \InvalidArgumentException('Listener '.$name.' does not exist');
    }
}
