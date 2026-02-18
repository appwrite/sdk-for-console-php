<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\ConsoleResourceType;

class Console extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Check if a resource ID is available.
     *
     * @param string $value
     * @param ConsoleResourceType $type
     * @throws AppwriteException
     * @return string
     */
    public function getResource(string $value, ConsoleResourceType $type): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/resources'
        );

        $apiParams = [];
        $apiParams['value'] = $value;
        $apiParams['type'] = $type;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get all Environment Variables that are relevant for the console.
     *
     * @throws AppwriteException
     * @return array
     */
    public function variables(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/variables'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}