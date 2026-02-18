<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

class Proxy extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all the proxy rules. You can use the query params to filter
     * your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listRules(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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
     * Create a new proxy rule for serving Appwrite's API on custom domain.
     *
     * @param string $domain
     * @throws AppwriteException
     * @return array
     */
    public function createAPIRule(string $domain): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/api'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;

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
     * Create a new proxy rule for executing Appwrite Function on custom domain.
     *
     * @param string $domain
     * @param string $functionId
     * @param ?string $branch
     * @throws AppwriteException
     * @return array
     */
    public function createFunctionRule(string $domain, string $functionId, ?string $branch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/function'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['functionId'] = $functionId;

        if (!is_null($branch)) {
            $apiParams['branch'] = $branch;
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
     * Create a new proxy rule for to redirect from custom domain to another
     * domain.
     *
     * @param string $domain
     * @param string $url
     * @param StatusCode $statusCode
     * @param string $resourceId
     * @param ProxyResourceType $resourceType
     * @throws AppwriteException
     * @return array
     */
    public function createRedirectRule(string $domain, string $url, StatusCode $statusCode, string $resourceId, ProxyResourceType $resourceType): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/redirect'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['url'] = $url;
        $apiParams['statusCode'] = $statusCode;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['resourceType'] = $resourceType;

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
     * Create a new proxy rule for serving Appwrite Site on custom domain.
     *
     * @param string $domain
     * @param string $siteId
     * @param ?string $branch
     * @throws AppwriteException
     * @return array
     */
    public function createSiteRule(string $domain, string $siteId, ?string $branch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/site'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['siteId'] = $siteId;

        if (!is_null($branch)) {
            $apiParams['branch'] = $branch;
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
     * Get a proxy rule by its unique ID.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return array
     */
    public function getRule(string $ruleId): array
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a proxy rule by its unique ID.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return string
     */
    public function deleteRule(string $ruleId): string
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Retry getting verification process of a proxy rule. This endpoint triggers
     * domain verification by checking DNS records (CNAME) against the configured
     * target domain. If verification is successful, a TLS certificate will be
     * automatically provisioned for the domain.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return array
     */
    public function updateRuleVerification(string $ruleId): array
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}/verification'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}