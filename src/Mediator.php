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
     * @param string           $name
     * @param AbstractListener $listener
     * @param string           $method
     */
    public function addListener(string $name, AbstractListener $listener, string $method): void
    {
        if (array_key_exists($name, $this->listeners)) {
            throw new \InvalidArgumentException('Listener already exists');
        }

        $this->listeners[$name] = [$listener, $method];
    }

    /**
     * @param string                $name
     * @param HandlerInterface|null $handler
     * @return mixed
     */
    public function notify(string $name, HandlerInterface $handler = null)
    {
        if (array_key_exists($name, $this->listeners)) {
            $class  = $this->listeners[$name][0];
            $method = $this->listeners[$name][1];

            return $class->$method($handler);
        }

        throw new \InvalidArgumentException('Listener ' . $name . ' does not exist');
    }
}
