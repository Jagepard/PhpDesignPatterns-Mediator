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
     * @return void
     */
    public function toReact(): void
    {
        printf("%s\n", get_called_class() . ": Alerted!");
    }
}
