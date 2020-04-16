<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * @param AbstractListener $listener
     * @param string           $method
     */
    public function addListener(AbstractListener $listener, string $method): void;

    /**
     * @param string           $listenerName
     * @param HandlerInterface $handler
     * @return mixed
     */
    public function notify(string $listenerName, HandlerInterface $handler);
}
