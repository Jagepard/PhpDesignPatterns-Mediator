<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague1 implements ListenerInterface
{
    public function onEvent(): void
    {
        printf("%s\n", 'Colleague1: How are you?');
    }
}
