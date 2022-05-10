<?php
namespace App\Domains\ValueObjects;

class Suffix
{
    /**
     * @var string $suffix
     * @var string $meaning
     */
    private $suffix;
    private $meaning;

    /**
     * @param string $suffix
     * @param string $meaning
     * @return void
     */
    public function __construct(string $suffix, string $meaning): void {
        $this->suffix = $suffix;
        $this->meaning = $meaning;
    }

    /**
     * @return string
     */
    public function getSuffix(): string {
        return $this->suffix;
    }

    /**
     * @return string
     */
    public function getMeaning(): string {
        return $this->meaning;
    }
}