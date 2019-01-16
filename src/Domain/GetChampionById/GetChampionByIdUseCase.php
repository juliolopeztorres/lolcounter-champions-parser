<?php

namespace App\Domain\GetChampionById;

use App\Domain\Repository\ChampionRepositoryInterface;

class GetChampionByIdUseCase
{
    private $championRepository;

    public function __construct(ChampionRepositoryInterface $championRepository)
    {
        $this->championRepository = $championRepository;
    }

    public function get(string $id, string $languageCode)
    {
        return $id && $languageCode ? $this->championRepository->getById($id, $languageCode) : null;
    }
}
