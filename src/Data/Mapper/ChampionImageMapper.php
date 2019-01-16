<?php

namespace App\Data\Mapper;

use App\Domain\Model\ChampionImage;

class ChampionImageMapper
{
    public static function map(array $championImageArray)
    {
        $championImage = new ChampionImage();

        $championImage
          ->setFull($championImageArray['full'])
          ->setSprite($championImageArray['sprite'])
          ->setGroup($championImageArray['group'])
          ->setX($championImageArray['x'])
          ->setY($championImageArray['y'])
          ->setW($championImageArray['w'])
          ->setH($championImageArray['h']);

        return $championImage;
    }
}
