<?php

namespace Subashrijal5\ChatgptLaravel;

use Illuminate\Support\Facades\Http;
use Subashrijal5\ChatgptLaravel\Services\ApiService;

class ChatgptLaravel
{
    /**
     * Correct grammer request
     */
    public function correctGrammer(string $text): array
    {
        return ApiService::request("Correct this to standard English:\n\n{$text}", 'grammer-correction');
    }

    /**
     * Question Answer request, Ask Any question you wish
     */

    public function qustionAnswer(string $text): array
    {
        $promt = "I am a highly intelligent question answering bot. If you ask me a question that is rooted in
        truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no
        clear answer, I will respond with \"Unknown\".\n\nQ: What
        is human life expectancy in the United States?\nA: Human life expectancy
        in the United States is 78 years.\n\nQ: Who was president of the United
        States in 1955?\nA: Dwight D. Eisenhower was president of the United States in
        1955.\n\nQ: Which party did he belong to?\nA: He belonged to the Republican Party.\n\nQ:
        What is the square root of banana?\nA: Unknown\n\nQ: How does a telescope work?\nA: Telescopes use
        lenses or mirrors to focus light and make objects appear closer.\n\nQ: How many squigs are in a
        bonk?\nA: Unknown\n\nQ: {$text}\nA:";

        return ApiService::request($promt, 'question-answer');
    }

    /**
     * Give a topic to write the essay
     */
    public function essayWriter(string $topic): array
    {
        $promt = "Write an essay for me on Topic: {$topic} \n";

        return ApiService::request($promt, 'essay-writer');
    }

    /**
     * Give a topic to write the essay
     */
    public function essayOutline(string $topic): array
    {
        $promt = "Create an outline for an essay about: {$topic} \n";

        return ApiService::request($promt, 'essay-outline');
    }

    /**
     * Give the topic and genre or type to tell story
     */

    public function storyTeller(string $topic, string $type): array
    {
        $promt = "Topic: Breakfast\nTwo-Sentence Horror Story:
        He always stops crying when I pour the milk on his cereal.
         I just have to remember not to let him see his face on the carton.\n
         \nTopic: {$topic}\nTwo-Sentence {$type} Story:";

        return ApiService::request($promt, 'story-teller');
    }

    /**
     * Give the topic to prepare study notes
     */
    public function studyNotes(string $topic): array
    {
        $promt = "What are 5 key points I should know when studying {$topic}";
        return ApiService::request($promt, 'study-notes');
    }

    /**
     * Give the topic to prepare study notes
     */
    public function solveMathematicalProblem(string $problem): array
    {
        $promt = "Solve this: {$problem}";
        return ApiService::request($promt, 'mathematical-problem');
    }
}
