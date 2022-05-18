<?php
namespace App\Domains\ValueObjects;

class Prefix
{
    /**
     * @var string $prefix
     * @var string $meaning
     */
    private $prefix;
    private $meaning;

    /**
     * @param string $prefix
     * @param string $meaning
     * @return void
     */
    public function __construct(string $prefix, string $meaning): void {
        $this->prefix = $prefix;
        $this->meaning = $meaning;
    }

    /**
     * @return string
     */
    public function getPrefix(): string {
        return $this->prefix;
    }

    /**
     * @return string
     */
    public function getMeaning(): string {
        return $this->meaning;
    }
}