<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Platform;
use Appwrite\Enums\ConsoleResourceType;

class Console extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Receive the details of a campaign using its ID.
     *
     * @param string $campaignId
     * @throws AppwriteException
     * @return array
     */
    public function getCampaign(string $campaignId): array
    {
        $apiPath = str_replace(
            ['{campaignId}'],
            [$campaignId],
            '/console/campaigns/{campaignId}'
        );

        $apiParams = [];
        $apiParams['campaignId'] = $campaignId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the details of a coupon using it's coupon ID.
     *
     * @param string $couponId
     * @throws AppwriteException
     * @return array
     */
    public function getCoupon(string $couponId): array
    {
        $apiPath = str_replace(
            ['{couponId}'],
            [$couponId],
            '/console/coupons/{couponId}'
        );

        $apiParams = [];
        $apiParams['couponId'] = $couponId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Return a list of all available plans.
     *
     * @param ?Platform $platform
     * @throws AppwriteException
     * @return array
     */
    public function getPlans(?Platform $platform = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/plans'
        );

        $apiParams = [];

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
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
     * Get the details of a plan using its plan ID.
     *
     * @param string $planId
     * @throws AppwriteException
     * @return array
     */
    public function getPlan(string $planId): array
    {
        $apiPath = str_replace(
            ['{planId}'],
            [$planId],
            '/console/plans/{planId}'
        );

        $apiParams = [];
        $apiParams['planId'] = $planId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Receive the details of a program using its ID.
     *
     * @param string $programId
     * @throws AppwriteException
     * @return array
     */
    public function getProgram(string $programId): array
    {
        $apiPath = str_replace(
            ['{programId}'],
            [$programId],
            '/console/programs/{programId}'
        );

        $apiParams = [];
        $apiParams['programId'] = $programId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new membership for an account to a program.
     *
     * @param string $programId
     * @throws AppwriteException
     * @return array
     */
    public function createProgramMembership(string $programId): array
    {
        $apiPath = str_replace(
            ['{programId}'],
            [$programId],
            '/console/programs/{programId}/memberships'
        );

        $apiParams = [];
        $apiParams['programId'] = $programId;

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
     * Get all available regions for the console.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listRegions(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/regions'
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
     * Create a new source.
     *
     * @param ?string $ref
     * @param ?string $referrer
     * @param ?string $utmSource
     * @param ?string $utmCampaign
     * @param ?string $utmMedium
     * @throws AppwriteException
     * @return array
     */
    public function createSource(?string $ref = null, ?string $referrer = null, ?string $utmSource = null, ?string $utmCampaign = null, ?string $utmMedium = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/sources'
        );

        $apiParams = [];
        $apiParams['ref'] = $ref;
        $apiParams['referrer'] = $referrer;
        $apiParams['utmSource'] = $utmSource;
        $apiParams['utmCampaign'] = $utmCampaign;
        $apiParams['utmMedium'] = $utmMedium;

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
     * Suggests column names and their size limits based on the provided table
     * name. The API will also analyze other tables in the same database to
     * provide context-aware suggestions, ensuring consistency across schema
     * design. Users may optionally provide custom context to further refine the
     * suggestions.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?string $context
     * @param ?int $min
     * @param ?int $max
     * @throws AppwriteException
     * @return array
     */
    public function suggestColumns(string $databaseId, string $tableId, ?string $context = null, ?int $min = null, ?int $max = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/suggestions/columns'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        if (!is_null($context)) {
            $apiParams['context'] = $context;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
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
     * Suggests database indexes for table columns based on the provided table
     * structure and existing columns. The API will also analyze the table's
     * column types, names, and patterns to recommend optimal indexes that improve
     * query performance for common database operations like filtering, sorting,
     * and searching.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?int $min
     * @param ?int $max
     * @throws AppwriteException
     * @return array
     */
    public function suggestIndexes(string $databaseId, string $tableId, ?int $min = null, ?int $max = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/console/suggestions/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
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