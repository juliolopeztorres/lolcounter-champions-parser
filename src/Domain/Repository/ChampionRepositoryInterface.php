<?php

namespace App\Domain\Repository;

interface ChampionRepositoryInterface
{
    public function getIds();

    public function getById(string $id, string $languageCode);
}
