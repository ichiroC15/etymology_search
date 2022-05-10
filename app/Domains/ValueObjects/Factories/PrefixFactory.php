<?php

namespace App\Domains\ValueObjects\Factories;

use App\Domains\ValueObjects\Prefix;
use App\Services\EtymologyParser;

class PrefixFactory
{
    public static function createPrefix(string $text): Prefix|null {
        $prefix = EtymologyParser::extractPrefix($text);
        $meaning = EtymologyParser::extractPrefix($text);

        return new Prefix(prefix: $prefix, meaning: $meaning);
    }
}
