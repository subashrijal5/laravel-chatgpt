<?php

namespace Subashrijal5\ChatgptLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ChatgptLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'chatgpt-laravel';
    }
}
