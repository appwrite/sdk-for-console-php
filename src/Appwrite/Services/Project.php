<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\ProjectUsageRange;

class Project extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get comprehensive usage statistics for your project. View metrics including
     * network requests, bandwidth, storage, function executions, database usage,
     * and user activity. Specify a time range with startDate and endDate, and
     * optionally set the data granularity with period (1h or 1d). The response
     * includes both total counts and detailed breakdowns by resource, along with
     * historical data over the specified period.
     *
     * @param string $startDate
     * @param string $endDate
     * @param ?ProjectUsageRange $period
     * @throws AppwriteException
     * @return array
     */
    public function getUsage(string $startDate, string $endDate, ?ProjectUsageRange $period = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/usage'
        );

        $apiParams = [];
        $apiParams['startDate'] = $startDate;
        $apiParams['endDate'] = $endDate;

        if (!is_null($period)) {
            $apiParams['period'] = $period;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all project variables. These variables will be accessible in
     * all Appwrite Functions at runtime.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listVariables(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
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

    /**
     * Create a new project variable. This variable will be accessible in all
     * Appwrite Functions at runtime.
     *
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return array
     */
    public function createVariable(string $key, string $value, ?bool $secret = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a project variable by its unique ID.
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return array
     */
    public function getVariable(string $variableId): array
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update project variable by its unique ID. This variable will be accessible
     * in all Appwrite Functions at runtime.
     *
     * @param string $variableId
     * @param string $key
     * @param ?string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return array
     */
    public function updateVariable(string $variableId, string $key, ?string $value = null, ?bool $secret = null): array
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a project variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return string
     */
    public function deleteVariable(string $variableId): string
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}