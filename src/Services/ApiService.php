<?php

namespace Subashrijal5\ChatgptLaravel\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    /**
     * Api request to chatgpt
     */
    public static function request(string $prompt, string $model): array
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Bearer " . config('chatgpt-laravel.api_key'),
        ])->post(config('chatgpt-laravel.base_url') . 'completions', [
            'model' => config('chatgpt-laravel.models.' . $model),
            'prompt' => $prompt,
            'max_tokens' => config('chatgpt-laravel.max_tokens')
        ]);
        return $response->json();
    }
}
