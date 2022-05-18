<?php
namespace App\Domains\ValueObjects;

class EnglishWord
{
    /**
     * @var string $word
     * @var string $partOfSpeech
     * @var string $meaning
     */
    private $word;
    private $partOfSpeech;
    private $meaning;

    /**
     * @param string $word
     * @param string $partOfSpeech
     * @param string $meaning
     * @return void
     */
    public function __construct(string $word, string $partOfSpeech, string $meaning): void {
        $this->word = $word;
        $this->partOfSpeech = $partOfSpeech;
        $this->meaning = $meaning;
    }
}