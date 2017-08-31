<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteColleague1
 * @package Behavioral\Mediator
 */
class ConcreteColleague1 implements ColleagueInterface
{

    /**
     * @param SomeEvent $event
     */
    public function onEvent(SomeEvent $event): void
    {
        $event->setMessage('How are you?');
        print $event->getMessage() . "\n";
    }
}
