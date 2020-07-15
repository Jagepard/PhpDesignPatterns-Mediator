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
        $listenerName = get_class($listener);

        if (array_key_exists($listenerName, $this->listeners)) {
            throw new \InvalidArgumentException("Listener already exists");
        }

        $listener->setMediator($this);
        $this->listeners[$listenerName] = [$listener, $method];
    }

    /**
     * @param AbstractListener $listener
     * @param HandlerInterface|null $handler
     * @return mixed
     */
    public function notify(AbstractListener $listener, HandlerInterface $handler = null)
    {
        $listenerName = get_class($listener);

        if (array_key_exists($listenerName, $this->listeners)) {
            $class  = $this->listeners[$listenerName][0];
            $method = $this->listeners[$listenerName][1];

            return $class->$method($handler);
        }

        throw new \InvalidArgumentException("Listener " . $listenerName . " does not exist");
    }
}
