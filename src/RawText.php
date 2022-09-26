<?php

namespace oirancage\rawtextstructure;

use Crell\Serde\Attributes\Field;
use oirancage\rawtextstructure\content\IContent;
use Crell\Serde\Attributes\SequenceField;

class RawText{

    /**
     * @var array<int, IContent>
     * @phpstan-var list<IContent>
     */
    #[Field("rawtext"), SequenceField(arrayType: IContent::class)]
    public array $rawTextEntries;

    public static function create(IContent $content, IContent ...$contents) : self{
        $list = [];
        $list[] = $content;
        foreach($contents as $other){
            $list[] = $other;
        }

        $result = new self;
        $result->rawTextEntries = $list;
        return $result;
    }
}