<?php

namespace App\Data\Mapper;

class ChampionSkinCollectionMapper
{
    public static function map(array $championSkinsArray)
    {
        $championSkinsCollection = [];

        foreach ($championSkinsArray as $championSkinArray) {
            $championSkinsCollection[] = ChampionSkinMapper::map($championSkinArray);
        }

        return $championSkinsCollection;
    }
}
