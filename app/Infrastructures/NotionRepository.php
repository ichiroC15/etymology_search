<?php

namespace App\Infrastructures;

use Illuminate\Support\Facades\Http;

class NotionRepository
{
    /**
     * @param string $englishWord
     * @return array
     */
    public static function searchForEnglishWordData(string $englishWord): array
    {
        // Http::get('');

        // Stub for development
        $word = 'approximate';
        $partOfSpeech = 'adjective';
        $meaning = 'close to the actual, but not completely accurate or exact';
        $etymology = "late Middle English (in the adjectival sense ‘close, similar’): from late Latin approximatus, past participle of approximare, from ad- ‘to’ + proximus ‘very near’. The verb (originally meaning ‘bring close’) arose in the mid 17th century; the current adjectival sense dates from the early 19th century";

        return [
            'word' => $word,
            'part_of_speech' => $partOfSpeech,
            'meaning' => $meaning,
            'etymology_text' => $etymology,
        ];
    }

    /**
     * @param string $englishWord
     * @return string
     */
    public static function searchForEtymology(string $englishWord): string
    {
        // Http::get('');

        // Stub for development
        $etymologyText = "late Middle English (in the adjectival sense ‘close, similar’): from late Latin approximatus, past participle of approximare, from ad- ‘to’ + proximus ‘very near’. The verb (originally meaning ‘bring close’) arose in the mid 17th century; the current adjectival sense dates from the early 19th century";

        return $etymologyText;
    }
}
