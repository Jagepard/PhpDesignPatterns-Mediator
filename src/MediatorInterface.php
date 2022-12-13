<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    public function addListener(AbstractListener $listener, string $method): void;
    public function notify(string $listenerName, HandlerInterface $handler = null);
}
