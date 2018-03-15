<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Mediator;

/**
 * Interface MediatorInterface
 *
 * @package Behavioral\Mediator
 */
interface MediatorInterface
{

    /**
     * @param string $key
     * @param string $instance
     * @param string $method
     */
    public function addListener(string $key, string $instance, string $method): void;

    /**
     * @param string           $key
     * @param SomeHandler|null $event
     *
     * @return mixed
     */
    public function dispatch(string $key, SomeHandler $event = null);
}
