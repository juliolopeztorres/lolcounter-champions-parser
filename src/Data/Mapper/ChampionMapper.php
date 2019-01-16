<?php

namespace App\Data\Mapper;

use App\Domain\Model\Champion;

class ChampionMapper
{
    public static function map(array $championArray)
    {
        $champion = new Champion();

        $champion
          ->setId((int) $championArray['key'])
          ->setKey($championArray['id'])
          ->setName($championArray['name'])
          ->setTitle($championArray['title'])
          ->setImage(ChampionImageMapper::map($championArray['image']))
          ->setSkins(ChampionSkinCollectionMapper::map($championArray['skins']))
          ->setLore($championArray['lore'])
          ->setAllyTips($championArray['allytips'])
          ->setEnemyTips($championArray['enemytips']);

        return $champion;
    }
}
