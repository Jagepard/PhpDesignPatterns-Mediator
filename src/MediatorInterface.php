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

    public function addListener(string $key, $instance, $method);

    public function dispatch(string $key, SomeEvent $event = null);
}