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
     * Adds the name of the listener class and the method to be called when dispatch is called
     * ---------------------------------------------------------------------------------------
     * Добавляет имя класса слушателя и метод, который будет вызван при обращении dispatch
     *
     * @param  string $listenerName
     * @param  string $methodName
     * @return void
     */
    public function addListener(string $listenerName, string $methodName): void
    {
        if (array_key_exists($listenerName, $this->listeners)) {
            throw new \InvalidArgumentException("Listener already exists");
        }

        $this->listeners[$listenerName] = [$listenerName,$methodName];
    }

    /**
     * Calls the installed addListener listener method
     * --------------------------------------------------
     * Вызывает установленный addListener метод слушателя
     *
     * @param  string $listenerName
     * @return void
     */
    public function dispatch(string $listenerName)
    {
        if (array_key_exists($listenerName, $this->listeners)) {
            return (new $this->listeners[$listenerName][0])->{$this->listeners[$listenerName][1]}();
        }

        throw new \InvalidArgumentException("Listener " . $listenerName . " does not exist");
    }
}
