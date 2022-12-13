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

    public function addListener(AbstractListener $listener, string $method): void
    {
        $listenerName = get_class($listener);

        if (array_key_exists($listenerName, $this->listeners)) {
            throw new \InvalidArgumentException("Listener already exists");
        }

        $this->listeners[$listenerName] = [
            "class"  => $listener,
            "method" => $method
        ];
    }

    public function notify(AbstractListener $listener, HandlerInterface $handler = null)
    {
        $listenerName = get_class($listener);

        if (array_key_exists($listenerName, $this->listeners)) {
            return $this->listeners[$listenerName]["class"]->{$this->listeners[$listenerName]["method"]}($handler);
        }

        throw new \InvalidArgumentException("Listener " . $listenerName . " does not exist");
    }
}
