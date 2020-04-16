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
     * @param AbstractListener $listener
     * @param string           $method
     */
    public function addListener(AbstractListener $listener, string $method): void
    {
        $name = get_class($listener);
        if (array_key_exists($name, $this->listeners)) {
            throw new \InvalidArgumentException("Listener already exists");
        }

        $this->listeners[$name] = [$listener, $method];
    }

    /**
     * @param string                $listenerName
     * @param HandlerInterface|null $handler
     * @return mixed
     */
    public function notify(string $listenerName, HandlerInterface $handler = null)
    {
        if (array_key_exists($listenerName, $this->listeners)) {
            $class  = $this->listeners[$listenerName][0];
            $method = $this->listeners[$listenerName][1];

            return $class->$method($handler);
        }

        throw new \InvalidArgumentException("Listener " . $listenerName . " does not exist");
    }
}
