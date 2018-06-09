<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

/**
 * Interface MediatorInterface
 * @package Behavioral\Mediator
 */
interface MediatorInterface
{

    /**
     * @param string $key
     * @param string $instance
     * @param string $event
     */
    public function addListener(string $key, string $instance, string $event): void;

    /**
     * @param string                $key
     * @param HandlerInterface|null $event
     * @return mixed
     */
    public function dispatch(string $key, HandlerInterface $event = null);
}
