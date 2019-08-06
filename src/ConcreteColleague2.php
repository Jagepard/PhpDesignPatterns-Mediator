<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class ConcreteColleague2 implements ListenerInterface
{
    /**
     * @param HandlerInterface $handler
     */
    public function onEvent(HandlerInterface $handler): void
    {
        $handler->setMessage('Colleague2: Fine, thanks!');
        printf("%s\n", $handler->getMessage());
    }
}
