<?php

namespace oirancage\rawtextstructure\content;

use Crell\Serde\Attributes\Field;

class PlainText implements IContent{

    #[Field]
    public string $text; 

    public static function create(string $text) : self{
        $result = new self;
        $result->text = $text;
        return $result;
    }
}