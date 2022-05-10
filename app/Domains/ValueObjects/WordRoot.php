<?php
namespace App\Domains\ValueObjects;

class WordRoot
{
    /**
     * @var string $root
     * @var string $meaning
     */
    private $root;
    private $meaning;

    /**
     * @param string $root
     * @param string $meaning
     * @return void
     */
    public function __construct(string $root, string $meaning): void {
        $this->root = $root;
        $this->meaning = $meaning;
    }

    /**
     * @return string
     */
    public function getRoot(): string {
        return $this->root;
    }

    /**
     * @return string
     */
    public function getMeaning(): string {
        return $this->meaning;
    }
}