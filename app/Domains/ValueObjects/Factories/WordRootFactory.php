<?php

namespace App\Domains\ValueObjects\Factories;

use App\Domains\ValueObjects\WordRoot;
use App\Services\EtymologyParser;

class WordRootFactory
{
    public static function createWordRoot(string $text): WordRoot|null {
        $root = EtymologyParser::extractWordRoot($text);
        $meaning = EtymologyParser::extractWordRootMeaning($text);

        return new WordRoot(root: $root, meaning: $meaning);
    }
}
