<?php

namespace Behavioral\Mediator;

require_once "vendor/autoload.php";

$mediator  = new Mediator();

try {
    // Adds a listener as well as an mediator to the listener
    $mediator->addListener(Colleague1::class, "toAnswer");
    $mediator->addListener(Colleague2::class, "toReact");
    $mediator->addListener(Colleague3::class, "sendToHell");

    $mediator->dispatch(Colleague1::class);
    $mediator->dispatch(Colleague2::class);
    $mediator->dispatch(Colleague3::class);
} catch (\Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\n";
}
