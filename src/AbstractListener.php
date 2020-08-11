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

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    public function toGreet(AbstractListener $listener, HandlerInterface $handler): void
    {
        printf("%s\n", get_called_class() . ": How are you " . get_class($listener) . "?");
        $this->mediator->notify($listener, $handler);
    }
}
