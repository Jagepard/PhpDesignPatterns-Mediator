<?php

require_once 'vendor/autoload.php';

$mediator = new \Behavioral\Mediator\ConcreteMediator();

$event = new \Behavioral\Mediator\SomeEvent();

$mediator->addListener('colleague_1', \Behavioral\Mediator\ConcreteColleague1::class, 'onEvent');
$mediator->addListener('colleague_2', \Behavioral\Mediator\ConcreteColleague2::class, 'onEvent');
$mediator->addListener('colleague_3', \Behavioral\Mediator\ConcreteColleague3::class, 'onEvent');

$mediator->dispatch('colleague_1', $event);
$mediator->dispatch('colleague_2', $event);
$mediator->dispatch('colleague_3', $event);