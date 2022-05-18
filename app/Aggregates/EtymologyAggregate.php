<?php
namespace App\Aggregates;

use App\Domains\ValueObjects\Etymology;
use App\Domains\ValueObjects\Factories\PrefixFactory;
use App\Domains\ValueObjects\Factories\SuffixFactory;
use App\Domains\ValueObjects\Factories\WordRootFactory;
use App\Domains\ValueObjects\Prefix;
use App\Domains\ValueObjects\Suffix;
use App\Domains\ValueObjects\WordRoot;

class etymologyAggregate
{
    /**
     * @var Etymology $etymology
     * @var Prefix $prefix
     * @var WordRoot $wordRoot
     * @var Suffix $suffix
     */
    private $etymology;
    private $prefix;
    private $wordRoot;
    private $suffix;

    public function __construct(string $etymologyText): void {
        $this->etymology = new Etymology(text: $etymologyText);
        $this->prefix = PrefixFactory::createPrefix(text: $etymologyText);
        $this->wordRoot = WordRootFactory::createWordRoot(text: $etymologyText);
        $this->suffix = SuffixFactory::createSuffix(text: $etymologyText);
    }

    /**
     * @return string|null
     */
    public function getEtymologyText(): string|null {
        return $this->etymology->getText();
    }

    /**
     * @return array
     */
    public function getPrefix(): array {
        return [
            $this->prefix->getPrefix(),
            $this->prefix->getMeaning(),
        ];
    }

    /**
     * @return array
     */
    public function getRoot(): array {
        return [
            $this->wordRoot->getRoot(),
            $this->wordRoot->getMeaning(),
        ];
    }

    /**
     * @return array
     */
    public function getSuffix(): array {
        return [
            $this->suffix->getSuffix(),
            $this->suffix->getMeaning(),
        ];
    }
}