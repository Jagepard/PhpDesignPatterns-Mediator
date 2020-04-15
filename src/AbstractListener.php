<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

abstract class AbstractListener
{
    public function onEvent(): void
    {
        printf("%s\n", get_called_class() . ": Fine, thanks!");
    }

    /**
     * @param string            $listenerName
     * @param MediatorInterface $mediator
     * @param HandlerInterface  $helperHandler
     */
    public function toGreet(string $listenerName, MediatorInterface $mediator, HandlerInterface $helperHandler): void
    {
        printf("%s\n", get_called_class() . ": How are you $listenerName?");
        $mediator->notify($listenerName, $helperHandler);
    }
}
