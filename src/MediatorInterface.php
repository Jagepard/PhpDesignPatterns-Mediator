<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * @param  string $listenerName
     * @param  string $methodName
     * @return void
     */
    public function addListener(string $listenerName, string $methodName): void;

    /**
     * @param  string $listenerName
     * @return void
     */
    public function dispatch(string $listenerName);
}
