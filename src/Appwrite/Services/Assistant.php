<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Assistant extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Send a prompt to the AI assistant and receive a response. This endpoint
     * allows you to interact with Appwrite's AI assistant by sending questions or
     * prompts and receiving helpful responses in real-time through a server-sent
     * events stream. 
     *
     * @param string $prompt
     * @throws AppwriteException
     * @return array
     */
    public function chat(string $prompt): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/assistant'
        );

        $apiParams = [];
        $apiParams['prompt'] = $prompt;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}