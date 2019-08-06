<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class ConcreteColleague1 implements ListenerInterface
{
    public function onEvent(): void
    {
        printf("%s\n", 'Colleague1: How are you?');
    }
}
