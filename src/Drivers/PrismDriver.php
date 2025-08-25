<?php

namespace Glugox\Ai\Drivers;

use Glugox\Ai\AiResponse;
use Glugox\Ai\Contracts\AiDriver;
use Prism\Prism\Prism;
use Prism\Prism\Enums\Provider;
use Prism\Prism\Text\PendingRequest as PendingTextRequest;

class PrismDriver implements AiDriver
{
    /**
     * Constructor
     */
    public function __construct(protected ?PendingTextRequest $request = null)
    {
        $this->request = $request ?? Prism::text();
    }

    public function ask(string $prompt): AiResponse
    {
        $defaultModel = config('ai.drivers.ollama.model');

        // Pass the url to PrismPHP
        $response = $this->request
            ->using(Provider::OpenAI, $defaultModel, [
                'url' => config('ai.providers.ollama.url')
            ])
            ->withPrompt($prompt)
            ->asText();

        return new AiResponse($response->text);
    }
}
