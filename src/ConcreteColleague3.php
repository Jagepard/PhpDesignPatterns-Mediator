<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Mediator;

/**
 * Class ConcreteColleague3
 * @package Behavioral\Mediator
 */
class ConcreteColleague3 implements ColleagueInterface
{

    /**
     * @param SomeEvent $event
     */
    public function onEvent(SomeEvent $event): void
    {
        $event->setMessage('Fuck you all!');
        print $event->getMessage() . "\n";
    }
}
