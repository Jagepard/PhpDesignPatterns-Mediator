<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

abstract class AbstractListener
{
    public function onEvent(HandlerInterface $handler): void
    {
        $handler->setMessage(get_called_class() . ": Fine, thanks!");
        printf("%s\n", $handler->getMessage());
    }

    /**
     * @param string            $listenerName
     * @param MediatorInterface $mediator
     * @param HandlerInterface  $handler
     */
    public function toGreet(string $listenerName, MediatorInterface $mediator, HandlerInterface $handler): void
    {
        printf("%s\n", get_called_class() . ": How are you $listenerName?");
        $mediator->notify($listenerName, $handler);
    }
}
