<?php

namespace App\Data\Service;

use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\HandlerStack;

use App\Data\Service\LogMiddleware;

class Client
{
    const CDN_VERSION = '9.1.1';
    private $guzzle;

    public function __construct(LogMiddleware $logMiddleware)
    {
        $this->guzzle = new BaseClient(
          [
                   'base_uri'        => 'https://ddragon.leagueoflegends.com/cdn/',
                   'timeout'         => 0,
                   'allow_redirects' => false,
                   'headers' => [
                     'Accept' => 'application/json',
                     'Content-Type' => 'application/json'
                   ],
                   'handler' => $this->getHandler($logMiddleware)
          ]
        );
    }

    private function getHandler(LogMiddleware $logMiddleware)
    {
        $stack = HandlerStack::create();
        $stack->push($logMiddleware->get());

        return $stack;
    }

    public function getChampionsId()
    {
        $response = $this->guzzle->request(
          'GET',
           self::CDN_VERSION . "/data/es_ES/champion.json"
        );

        return json_decode($response->getBody(), true)['data'];
    }

    public function getChampionById(string $id, string $languageCode)
    {
        $response = $this->guzzle->request(
        'GET',
         self::CDN_VERSION . "/data/{$languageCode}/champion/{$id}.json"
      );

        return json_decode($response->getBody(), true)['data'];
    }
}
