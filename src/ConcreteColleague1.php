<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteColleague1
 * @package Behavioral\Mediator
 */
class ConcreteColleague1 implements ListenerInterface
{

    /**
     * @param HandlerInterface $handler
     */
    public function onEvent(HandlerInterface $handler): void
    {
        $handler->setMessage('How are you?');
        printf("%s\n", $handler->getMessage());
    }
}
