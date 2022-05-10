<?php

namespace App\Domains\ValueObjects;

class Etymology
{
    /** @var string|null $text */
    private $text;

    /**
     * @param string|null $text
     * @return void
     */
    public function __construct(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string|null
     */
    public function getText(): string|null {
        return $this->text;
    }
}
