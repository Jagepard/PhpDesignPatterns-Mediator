<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteColleague2
 * @package Behavioral\Mediator
 */
class ConcreteColleague2 implements ColleagueInterface
{

    /**
     * @param SomeHandler $event
     */
    public function onEvent(SomeHandler $event): void
    {
        $event->setMessage('Fine, thanks!');
        print $event->getMessage() . "\n";
    }
}
