<?php

namespace EFabrica\Services;

use GuzzleHttp\Client;

class PetStore
{
    protected const URI = 'https://petstore3.swagger.io/api/v3';
    protected const AUTH_URI = 'https://petstore3.swagger.io/oauth/authorize';

    protected string $key;

    public function __construct(private Client $client)
    {
        $response = $this->client->get(self::AUTH_URI);
        bdump($response);
        bdump($response->getBody());
        bdump((string) $response->getBody());
    }

    public function createUri(string $uri): string
    {
        return self::URI . $uri;
    }

    public function getList()
    {
    }
}