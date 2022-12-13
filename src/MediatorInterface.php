<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    public function addListener(string $listenerName, string $methodName): void;
    public function dispatch(string $listenerName);
}
