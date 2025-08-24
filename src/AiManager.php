<?php

namespace Glugox\Ai;

use Glugox\Ai\Contracts\AiDriver;

class AiManager
{
    protected AiDriver $driver;

    public function __construct(AiDriver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Ask a question to the AI model and get a response.
     */
    public function ask(string $prompt): AiResponse
    {
        return $this->driver->ask($prompt);
    }
}
