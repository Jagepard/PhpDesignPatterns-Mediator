<?php

namespace Behavioral\Mediator;

class SomeEvent
{
    protected $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}