<?php

namespace App\Controllers;

use App\Aggregates\etymologyAggregate;
use App\Infrastructures\NotionRepository;
use App\UseCases\SearchForEtymologyUsecase;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class etymologyController extends BaseController
{
    /**
     * @param Request $request
     * @return string
     */
    public function searchByEnglishWord(Request $request): string {
        $etymologyText = NotionRepository::searchForEtymology(englishWord: $request->input('word'));

        $etymologyAggregate = (new SearchForEtymologyUsecase(etymologyText: $etymologyText))->getEtymologyAggregate();

        return $this->convertAggregateToJSON(aggregate: $etymologyAggregate);

    }

    /**
     * @param etymologyAggregate $aggregate
     * @return string
     */
    private function convertAggregateToJSON(etymologyAggregate $aggregate): string {
        $data = [
            'etymology_text' => $aggregate->getEtymologyText(),
            'etymologies' => [
                'prefix' => $aggregate->getPrefix(),
                'root' => $aggregate->getRoot(),
                'suffix' => $aggregate->getSuffix(),
            ],
        ];

        return json_encode($data);
    }
}
