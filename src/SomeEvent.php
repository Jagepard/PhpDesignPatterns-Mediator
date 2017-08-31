<?php

declare(strict_types = 1);

namespace Behavioral\Mediator;

/**
 * Class SomeEvent
 *
 * @package Behavioral\Mediator
 */
class SomeEvent
{
    /**
     * @var
     */
    protected $message;

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}