<?php

namespace App\Domain\GetChampionsId;

use App\Domain\Repository\ChampionRepositoryInterface;

class GetChampionsIdUseCase
{
    private $championRepository;

    public function __construct(ChampionRepositoryInterface $championRepository)
    {
        $this->championRepository = $championRepository;
    }

    public function get()
    {
        return $this->championRepository->getIds();
    }
}
