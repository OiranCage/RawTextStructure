<?php

namespace oirancage\rawtextstructure\content;

use Crell\Serde\Attributes\Field;

class Score{
    
    #[Field]
    public string $name;

    #[Field]
    public string $objective;

    #[Field]
    public string $value;

    public static function create(string $name, string $objetive, string $value = null) : self{
        $result = new self;
        $result->name = $name;
        $result->objective = $objetive;
        if($value !== null) $result->value = $value;
        return $result;
    }
}