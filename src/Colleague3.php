<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Mediator;

class Colleague3 extends AbstractListener
{
    public function sendToHell(): void
    {
        printf("%s\n", get_called_class() . ": Go to hell!");
    }
}
