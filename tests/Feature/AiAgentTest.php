<?php

use Glugox\Ai\Facades\Ai;

it('returns a response object for a prompt', function () {
    $response = Ai::ask("What is the capital of France?");

    // The first strict check: it returns an object with text()
    expect($response)->toBeObject();
    expect($response->text())->toBeString();
});

it('returns correct answers for different prompts', function () {
    $response1 = Ai::ask("What is 2 + 2?");
    $response2 = Ai::ask("What is the capital of Germany?");

    expect($response1->text())->toBe("4");
    expect($response2->text())->toBe("Berlin");
});
