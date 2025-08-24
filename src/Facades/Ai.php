<?php

namespace Glugox\Ai\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Glugox\Ai\Ai
 */
class Ai extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Glugox\Ai\Ai::class;
    }
}
