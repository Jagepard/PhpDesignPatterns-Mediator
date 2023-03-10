<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague1 implements ListenerInterface
{
    /**
     * @return void
     */
    public function toAnswer(): void
    {
        printf("%s\n", get_called_class() . ": Alerted!");
    }
}
