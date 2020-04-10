<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague2 implements ListenerInterface
{
    /**
     * @param HandlerInterface $handler
     */
    public function onEvent(HandlerInterface $handler): void
    {
        $handler->setMessage('Colleague2: reacts on notify');
        printf("%s\n", $handler->getMessage());
    }
}
