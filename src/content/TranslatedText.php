<?php

namespace oirancage\rawtextstructure\content;

use Crell\Serde\Attributes\Field;
use Crell\Serde\Attributes\SequenceField;

class TranslatedText implements IContent{

    #[Field]
    public string $translate;

    /**
     * @var array<int, IContent>
     * @phpstan-var list<IContent>
     */
    #[Field, SequenceField(arrayType: IContent::class)]
    public array $with;

    /**
     * @param array<int, IContent> $with
     * @phpstan-param list<IContent> $with
     */
    public static function create(string $translate, array $with = null) : self{
        $result = new self;
        $result->translate = $translate;
        if($with !== null) $result->with = $with;
        return $result;
    }
}