<?php

namespace App\Domains\ValueObjects\Factories;

use App\Domains\ValueObjects\Suffix;
use App\Services\EtymologyParser;

class SuffixFactory
{
    public static function createSuffix(string $text): Suffix|null {
        $suffix = EtymologyParser::extractSuffix($text);
        $meaning = EtymologyParser::extractSuffixMeaning($text);

        return new Suffix(suffix: $suffix, meaning: $meaning);
    }
}
