<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * @param  string  $name
     * @param  array  $listener
     */
    public function addListener(string $name, array $listener): void;

    /**
     * @param  string  $name
     * @param  HandlerInterface|null  $handler
     * @return mixed
     */
    public function dispatch(string $name, HandlerInterface $handler = null);
}
