<?php

namespace App\UseCases;

use App\Aggregates\etymologyAggregate;

class SearchForEtymologyUsecase
{
    private $etymologyAggregate;

    /**
     * @param string $etymologyText
     * @return void
     */
    public function __construct(string $etymologyText): void {
        $this->etymologyAggregate = new etymologyAggregate(etymologyText: $etymologyText);
    }

    /**
     * @return etymologyAggregate
     */
    public function getEtymologyAggregate(): etymologyAggregate {

        return $this->etymologyAggregate;
    }
}
