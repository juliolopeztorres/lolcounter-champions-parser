<?php

namespace App\Data\Mapper;

use App\Domain\Model\ChampionSkin;

class ChampionSkinMapper
{
    public static function map(array $championSkinArray)
    {
        $championSkin = new ChampionSkin();

        $championSkin
          ->setId((int) $championSkinArray['id'])
          ->setName($championSkinArray['name'])
          ->setNum($championSkinArray['num']);

        return $championSkin;
    }
}
