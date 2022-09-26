<?php

namespace oirancage\rawtextstructure\content;

use Crell\Serde\Attributes\Field;

class ScoreboardValue implements IContent{
    
    #[Field]
    public Score $score; 

    public static function create(Score $score) : self{
        $result = new self;
        $result->score = $score;
        return $result;
    }
}