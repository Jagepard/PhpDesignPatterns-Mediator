<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague1 extends AbstractListener
{
    public function toAnswer(HandlerInterface $handler): void
    {
        $handler->setMessage(get_called_class() . ": Fine, thanks!");
        printf("%s\n", $handler->getMessage());
    }
}
