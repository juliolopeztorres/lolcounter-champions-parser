<?php

namespace App\Data;

use App\Domain\Repository\ChampionRepositoryInterface;
use App\Data\Service\Client;
use App\Data\Mapper\ChampionMapper;

class ChampionRepository implements ChampionRepositoryInterface
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getIds()
    {
        return array_keys($this->client->getChampionsId());
    }

    public function getById(string $id, string $languageCode)
    {
        return ChampionMapper::map(
          $this->client->getChampionById($id, $languageCode)[$id]
        );
    }
}
