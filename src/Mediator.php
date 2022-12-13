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

    public function addListener(string $listenerName, string $methodName): void
    {
        if (array_key_exists($listenerName, $this->listeners)) {
            throw new \InvalidArgumentException("Listener already exists");
        }

        $this->listeners[$listenerName] = [$listenerName,$methodName];
    }

    public function dispatch(string $listenerName)
    {
        if (array_key_exists($listenerName, $this->listeners)) {
            return (new $this->listeners[$listenerName][0])->{$this->listeners[$listenerName][1]}();
        }

        throw new \InvalidArgumentException("Listener " . $listenerName . " does not exist");
    }
}
