<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

abstract class AbstractListener
{
    protected MediatorInterface $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @param AbstractListener $listener
     * @param HandlerInterface $handler
     */
    public function toGreet(AbstractListener $listener, HandlerInterface $handler): void
    {
        $listenerName = get_class($listener);
        printf("%s\n", get_called_class() . ": How are you " . $listenerName . "?");

        $this->mediator->notify($listener, $handler);
    }
}
