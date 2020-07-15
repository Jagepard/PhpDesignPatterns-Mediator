<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague2 extends AbstractListener
{
    public function toReact(HandlerInterface $handler): void
    {
        $handler->setMessage(get_called_class() . ": Thank you, everything is OK!");
        printf("%s\n", $handler->getMessage());
    }
}
