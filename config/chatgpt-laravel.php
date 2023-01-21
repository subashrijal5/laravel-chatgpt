<?php

return [
    'base_url' => 'https://api.openai.com/v1/',


    'api_key' => env('OPENAI_API_KEY', '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'),


    'max_tokens' => env('OPENAI_MAX_TOKENS', 100),


    'models' => [
        'grammer-correction' => 'text-davinci-003',
        'question-answer' => 'text-davinci-003',
        'essay-writer' => 'text-davinci-003',
        'essay-outline' => 'text-davinci-003',
        'story-teller' => 'text-davinci-003',
        'study-notes' => 'text-davinci-003',
        'mathematical-problem' => 'text-davinci-003',
    ]
];
