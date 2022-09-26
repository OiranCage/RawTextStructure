<?php

namespace oirancage\rawtextstructure\content;

use Crell\Serde\Attributes\Field;

class EntityNames implements IContent{
    
    #[Field]
    public string $selector; 

    public static function create(string $selector) : self{
        $result = new self;
        $result->selector = $selector;
        return $result;
    }
}