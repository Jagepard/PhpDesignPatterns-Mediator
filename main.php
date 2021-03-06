<?php

namespace Behavioral\Mediator;

require_once "vendor/autoload.php";

$handler   = new Handler();
$mediator  = new Mediator();
$listener1 = new Colleague1();
$listener2 = new Colleague2();
$listener3 = new Colleague3();

try {
    // Adds a listener as well as an mediator to the listener
    $mediator->addListener($listener1, "toAnswer");
    $mediator->addListener($listener2, "toReact");
    $mediator->addListener($listener3, "sendToHell");

    $listener1->toGreet($listener2, $handler);
    $listener2->toGreet($listener3, $handler);
    $listener3->toGreet($listener1, $handler);
} catch (\Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\n";
}
