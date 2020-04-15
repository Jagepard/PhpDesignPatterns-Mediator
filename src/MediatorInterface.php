<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * @param string           $name
     * @param AbstractListener $listener
     * @param string           $method
     */
    public function addListener(string $name, AbstractListener $listener, string $method): void;

    /**
     * @param  string  $name
     * @param  HandlerInterface|null  $handler
     * @return mixed
     */
    public function notify(string $name, HandlerInterface $handler = null);
}
