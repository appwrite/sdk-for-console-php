<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Region;
use Appwrite\Enums\Api;
use Appwrite\Enums\AuthMethod;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\OAuthProvider;
use Appwrite\Enums\PlatformType;
use Appwrite\Enums\ResourceType;
use Appwrite\Enums\ApiService;
use Appwrite\Enums\SMTPSecure;
use Appwrite\Enums\EmailTemplateType;
use Appwrite\Enums\EmailTemplateLocale;
use Appwrite\Enums\SmsTemplateType;
use Appwrite\Enums\SmsTemplateLocale;

class Projects extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all projects. You can use the query params to filter your
     * results. 
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/projects'
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
     * Create a new project. You can create a maximum of 100 projects per account.
     * 
     *
     * @param string $projectId
     * @param string $name
     * @param string $teamId
     * @param ?Region $region
     * @param ?string $description
     * @param ?string $logo
     * @param ?string $url
     * @param ?string $legalName
     * @param ?string $legalCountry
     * @param ?string $legalState
     * @param ?string $legalCity
     * @param ?string $legalAddress
     * @param ?string $legalTaxId
     * @throws AppwriteException
     * @return array
     */
    public function create(string $projectId, string $name, string $teamId, ?Region $region = null, ?string $description = null, ?string $logo = null, ?string $url = null, ?string $legalName = null, ?string $legalCountry = null, ?string $legalState = null, ?string $legalCity = null, ?string $legalAddress = null, ?string $legalTaxId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/projects'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;
        $apiParams['teamId'] = $teamId;

        if (!is_null($region)) {
            $apiParams['region'] = $region;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($logo)) {
            $apiParams['logo'] = $logo;
        }

        if (!is_null($url)) {
            $apiParams['url'] = $url;
        }

        if (!is_null($legalName)) {
            $apiParams['legalName'] = $legalName;
        }

        if (!is_null($legalCountry)) {
            $apiParams['legalCountry'] = $legalCountry;
        }

        if (!is_null($legalState)) {
            $apiParams['legalState'] = $legalState;
        }

        if (!is_null($legalCity)) {
            $apiParams['legalCity'] = $legalCity;
        }

        if (!is_null($legalAddress)) {
            $apiParams['legalAddress'] = $legalAddress;
        }

        if (!is_null($legalTaxId)) {
            $apiParams['legalTaxId'] = $legalTaxId;
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
     * Get a project by its unique ID. This endpoint allows you to retrieve the
     * project's details, including its name, description, team, region, and other
     * metadata. 
     *
     * @param string $projectId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $projectId): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a project by its unique ID.
     *
     * @param string $projectId
     * @param string $name
     * @param ?string $description
     * @param ?string $logo
     * @param ?string $url
     * @param ?string $legalName
     * @param ?string $legalCountry
     * @param ?string $legalState
     * @param ?string $legalCity
     * @param ?string $legalAddress
     * @param ?string $legalTaxId
     * @throws AppwriteException
     * @return array
     */
    public function update(string $projectId, string $name, ?string $description = null, ?string $logo = null, ?string $url = null, ?string $legalName = null, ?string $legalCountry = null, ?string $legalState = null, ?string $legalCity = null, ?string $legalAddress = null, ?string $legalTaxId = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($logo)) {
            $apiParams['logo'] = $logo;
        }

        if (!is_null($url)) {
            $apiParams['url'] = $url;
        }

        if (!is_null($legalName)) {
            $apiParams['legalName'] = $legalName;
        }

        if (!is_null($legalCountry)) {
            $apiParams['legalCountry'] = $legalCountry;
        }

        if (!is_null($legalState)) {
            $apiParams['legalState'] = $legalState;
        }

        if (!is_null($legalCity)) {
            $apiParams['legalCity'] = $legalCity;
        }

        if (!is_null($legalAddress)) {
            $apiParams['legalAddress'] = $legalAddress;
        }

        if (!is_null($legalTaxId)) {
            $apiParams['legalTaxId'] = $legalTaxId;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a project by its unique ID.
     *
     * @param string $projectId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $projectId): string
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

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
     * Update the status of a specific API type. Use this endpoint to enable or
     * disable API types such as REST, GraphQL and Realtime.
     *
     * @param string $projectId
     * @param Api $api
     * @param bool $status
     * @throws AppwriteException
     * @return array
     */
    public function updateAPIStatus(string $projectId, Api $api, bool $status): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/api'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['api'] = $api;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the status of all API types. Use this endpoint to enable or disable
     * API types such as REST, GraphQL and Realtime all at once.
     *
     * @param string $projectId
     * @param bool $status
     * @throws AppwriteException
     * @return array
     */
    public function updateAPIStatusAll(string $projectId, bool $status): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/api/all'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update how long sessions created within a project should stay active for.
     *
     * @param string $projectId
     * @param int $duration
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthDuration(string $projectId, int $duration): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/duration'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['duration'] = $duration;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the maximum number of users allowed in this project. Set to 0 for
     * unlimited users. 
     *
     * @param string $projectId
     * @param int $limit
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthLimit(string $projectId, int $limit): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/limit'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['limit'] = $limit;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the maximum number of sessions allowed per user within the project,
     * if the limit is hit the oldest session will be deleted to make room for new
     * sessions.
     *
     * @param string $projectId
     * @param int $limit
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthSessionsLimit(string $projectId, int $limit): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/max-sessions'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['limit'] = $limit;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update project membership privacy settings. Use this endpoint to control
     * what user information is visible to other team members, such as user name,
     * email, and MFA status. 
     *
     * @param string $projectId
     * @param bool $userName
     * @param bool $userEmail
     * @param bool $mfa
     * @throws AppwriteException
     * @return array
     */
    public function updateMembershipsPrivacy(string $projectId, bool $userName, bool $userEmail, bool $mfa): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/memberships-privacy'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['userName'] = $userName;
        $apiParams['userEmail'] = $userEmail;
        $apiParams['mfa'] = $mfa;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the list of mock phone numbers for testing. Use these numbers to
     * bypass SMS verification in development. 
     *
     * @param string $projectId
     * @param array $numbers
     * @throws AppwriteException
     * @return array
     */
    public function updateMockNumbers(string $projectId, array $numbers): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/mock-numbers'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['numbers'] = $numbers;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Enable or disable checking user passwords against common passwords
     * dictionary. This helps ensure users don't use common and insecure
     * passwords. 
     *
     * @param string $projectId
     * @param bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthPasswordDictionary(string $projectId, bool $enabled): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/password-dictionary'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the authentication password history requirement. Use this endpoint
     * to require new passwords to be different than the last X amount of
     * previously used ones.
     *
     * @param string $projectId
     * @param int $limit
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthPasswordHistory(string $projectId, int $limit): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/password-history'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['limit'] = $limit;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Enable or disable checking user passwords against their personal data. This
     * helps prevent users from using personal information in their passwords. 
     *
     * @param string $projectId
     * @param bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updatePersonalDataCheck(string $projectId, bool $enabled): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/personal-data'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Enable or disable session email alerts. When enabled, users will receive
     * email notifications when new sessions are created.
     *
     * @param string $projectId
     * @param bool $alerts
     * @throws AppwriteException
     * @return array
     */
    public function updateSessionAlerts(string $projectId, bool $alerts): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/session-alerts'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['alerts'] = $alerts;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Invalidate all existing sessions. An optional auth security setting for
     * projects, and enabled by default for console project.
     *
     * @param string $projectId
     * @param bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateSessionInvalidation(string $projectId, bool $enabled): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/auth/session-invalidation'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the status of a specific authentication method. Use this endpoint to
     * enable or disable different authentication methods such as email, magic
     * urls or sms in your project. 
     *
     * @param string $projectId
     * @param AuthMethod $method
     * @param bool $status
     * @throws AppwriteException
     * @return array
     */
    public function updateAuthStatus(string $projectId, AuthMethod $method, bool $status): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{method}'],
            [$projectId, $method],
            '/projects/{projectId}/auth/{method}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['method'] = $method;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List all the project\'s dev keys. Dev keys are project specific and allow
     * you to bypass rate limits and get better error logging during development.'
     *
     * @param string $projectId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listDevKeys(string $projectId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/dev-keys'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
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
     * Create a new project dev key. Dev keys are project specific and allow you
     * to bypass rate limits and get better error logging during development.
     * Strictly meant for development purposes only.
     *
     * @param string $projectId
     * @param string $name
     * @param string $expire
     * @throws AppwriteException
     * @return array
     */
    public function createDevKey(string $projectId, string $name, string $expire): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/dev-keys'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;
        $apiParams['expire'] = $expire;

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
     * Get a project\'s dev key by its unique ID. Dev keys are project specific
     * and allow you to bypass rate limits and get better error logging during
     * development.
     *
     * @param string $projectId
     * @param string $keyId
     * @throws AppwriteException
     * @return array
     */
    public function getDevKey(string $projectId, string $keyId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/dev-keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a project\'s dev key by its unique ID. Use this endpoint to update a
     * project\'s dev key name or expiration time.'
     *
     * @param string $projectId
     * @param string $keyId
     * @param string $name
     * @param string $expire
     * @throws AppwriteException
     * @return array
     */
    public function updateDevKey(string $projectId, string $keyId, string $name, string $expire): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/dev-keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['expire'] = $expire;

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
     * Delete a project\'s dev key by its unique ID. Once deleted, the key will no
     * longer allow bypassing of rate limits and better logging of errors.
     *
     * @param string $projectId
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteDevKey(string $projectId, string $keyId): string
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/dev-keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;

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
     * Create a new JWT token. This token can be used to authenticate users with
     * custom scopes and expiration time. 
     *
     * @param string $projectId
     * @param array $scopes
     * @param ?int $duration
     * @throws AppwriteException
     * @return array
     */
    public function createJWT(string $projectId, array $scopes, ?int $duration = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/jwts'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['scopes'] = $scopes;

        if (!is_null($duration)) {
            $apiParams['duration'] = $duration;
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
     * Get a list of all API keys from the current project. 
     *
     * @param string $projectId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listKeys(string $projectId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/keys'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
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
     * Create a new API key. It's recommended to have multiple API keys with
     * strict scopes for separate functions within your project.
     *
     * @param string $projectId
     * @param string $name
     * @param ?array $scopes
     * @param ?string $keyId
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function createKey(string $projectId, string $name, ?array $scopes, ?string $keyId = null, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/keys'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;

        if (!is_null($keyId)) {
            $apiParams['keyId'] = $keyId;
        }
        $apiParams['expire'] = $expire;

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
     * Get a key by its unique ID. This endpoint returns details about a specific
     * API key in your project including it's scopes.
     *
     * @param string $projectId
     * @param string $keyId
     * @throws AppwriteException
     * @return array
     */
    public function getKey(string $projectId, string $keyId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a key by its unique ID. Use this endpoint to update the name,
     * scopes, or expiration time of an API key. 
     *
     * @param string $projectId
     * @param string $keyId
     * @param string $name
     * @param ?array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function updateKey(string $projectId, string $keyId, string $name, ?array $scopes, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

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
     * Delete a key by its unique ID. Once deleted, the key can no longer be used
     * to authenticate API calls. 
     *
     * @param string $projectId
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteKey(string $projectId, string $keyId): string
    {
        $apiPath = str_replace(
            ['{projectId}', '{keyId}'],
            [$projectId, $keyId],
            '/projects/{projectId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['keyId'] = $keyId;

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
     * Update the project labels by its unique ID. Labels can be used to easily
     * filter projects in an organization.
     *
     * @param string $projectId
     * @param array $labels
     * @throws AppwriteException
     * @return array
     */
    public function updateLabels(string $projectId, array $labels): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/labels'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['labels'] = $labels;

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
     * Update the OAuth2 provider configurations. Use this endpoint to set up or
     * update the OAuth2 provider credentials or enable/disable providers. 
     *
     * @param string $projectId
     * @param OAuthProvider $provider
     * @param ?string $appId
     * @param ?string $secret
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateOAuth2(string $projectId, OAuthProvider $provider, ?string $appId = null, ?string $secret = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/oauth2'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['provider'] = $provider;
        $apiParams['appId'] = $appId;
        $apiParams['secret'] = $secret;
        $apiParams['enabled'] = $enabled;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all platforms in the project. This endpoint returns an array
     * of all platforms and their configurations. 
     *
     * @param string $projectId
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listPlatforms(string $projectId, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/platforms'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

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
     * Create a new platform for your project. Use this endpoint to register a new
     * platform where your users will run your application which will interact
     * with the Appwrite API.
     *
     * @param string $projectId
     * @param PlatformType $type
     * @param string $name
     * @param ?string $key
     * @param ?string $store
     * @param ?string $hostname
     * @throws AppwriteException
     * @return array
     */
    public function createPlatform(string $projectId, PlatformType $type, string $name, ?string $key = null, ?string $store = null, ?string $hostname = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/platforms'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['name'] = $name;

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($store)) {
            $apiParams['store'] = $store;
        }

        if (!is_null($hostname)) {
            $apiParams['hostname'] = $hostname;
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
     * Get a platform by its unique ID. This endpoint returns the platform's
     * details, including its name, type, and key configurations. 
     *
     * @param string $projectId
     * @param string $platformId
     * @throws AppwriteException
     * @return array
     */
    public function getPlatform(string $projectId, string $platformId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{platformId}'],
            [$projectId, $platformId],
            '/projects/{projectId}/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['platformId'] = $platformId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a platform by its unique ID. Use this endpoint to update the
     * platform's name, key, platform store ID, or hostname. 
     *
     * @param string $projectId
     * @param string $platformId
     * @param string $name
     * @param ?string $key
     * @param ?string $store
     * @param ?string $hostname
     * @throws AppwriteException
     * @return array
     */
    public function updatePlatform(string $projectId, string $platformId, string $name, ?string $key = null, ?string $store = null, ?string $hostname = null): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{platformId}'],
            [$projectId, $platformId],
            '/projects/{projectId}/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['platformId'] = $platformId;
        $apiParams['name'] = $name;

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($store)) {
            $apiParams['store'] = $store;
        }

        if (!is_null($hostname)) {
            $apiParams['hostname'] = $hostname;
        }

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
     * Delete a platform by its unique ID. This endpoint removes the platform and
     * all its configurations from the project. 
     *
     * @param string $projectId
     * @param string $platformId
     * @throws AppwriteException
     * @return string
     */
    public function deletePlatform(string $projectId, string $platformId): string
    {
        $apiPath = str_replace(
            ['{projectId}', '{platformId}'],
            [$projectId, $platformId],
            '/projects/{projectId}/platforms/{platformId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['platformId'] = $platformId;

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
     * Get a list of all the project's schedules. You can use the query params to
     * filter your results.
     *
     * @param string $projectId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listSchedules(string $projectId, ?array $queries = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/schedules'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
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
     * Create a new schedule for a resource.
     *
     * @param string $projectId
     * @param ResourceType $resourceType
     * @param string $resourceId
     * @param string $schedule
     * @param ?bool $active
     * @param ?array $data
     * @throws AppwriteException
     * @return array
     */
    public function createSchedule(string $projectId, ResourceType $resourceType, string $resourceId, string $schedule, ?bool $active = null, ?array $data = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/schedules'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['schedule'] = $schedule;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
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
     * Get a schedule by its unique ID.
     *
     * @param string $projectId
     * @param string $scheduleId
     * @throws AppwriteException
     * @return array
     */
    public function getSchedule(string $projectId, string $scheduleId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{scheduleId}'],
            [$projectId, $scheduleId],
            '/projects/{projectId}/schedules/{scheduleId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['scheduleId'] = $scheduleId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the status of a specific service. Use this endpoint to enable or
     * disable a service in your project. 
     *
     * @param string $projectId
     * @param ApiService $service
     * @param bool $status
     * @throws AppwriteException
     * @return array
     */
    public function updateServiceStatus(string $projectId, ApiService $service, bool $status): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/service'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['service'] = $service;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the status of all services. Use this endpoint to enable or disable
     * all optional services at once. 
     *
     * @param string $projectId
     * @param bool $status
     * @throws AppwriteException
     * @return array
     */
    public function updateServiceStatusAll(string $projectId, bool $status): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/service/all'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the SMTP configuration for your project. Use this endpoint to
     * configure your project's SMTP provider with your custom settings for
     * sending transactional emails. 
     *
     * @param string $projectId
     * @param bool $enabled
     * @param ?string $senderName
     * @param ?string $senderEmail
     * @param ?string $replyTo
     * @param ?string $host
     * @param ?int $port
     * @param ?string $username
     * @param ?string $password
     * @param ?SMTPSecure $secure
     * @throws AppwriteException
     * @return array
     */
    public function updateSMTP(string $projectId, bool $enabled, ?string $senderName = null, ?string $senderEmail = null, ?string $replyTo = null, ?string $host = null, ?int $port = null, ?string $username = null, ?string $password = null, ?SMTPSecure $secure = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/smtp'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['enabled'] = $enabled;

        if (!is_null($senderName)) {
            $apiParams['senderName'] = $senderName;
        }

        if (!is_null($senderEmail)) {
            $apiParams['senderEmail'] = $senderEmail;
        }

        if (!is_null($replyTo)) {
            $apiParams['replyTo'] = $replyTo;
        }

        if (!is_null($host)) {
            $apiParams['host'] = $host;
        }

        if (!is_null($port)) {
            $apiParams['port'] = $port;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($secure)) {
            $apiParams['secure'] = $secure;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Send a test email to verify SMTP configuration. 
     *
     * @param string $projectId
     * @param array $emails
     * @param string $senderName
     * @param string $senderEmail
     * @param string $host
     * @param ?string $replyTo
     * @param ?int $port
     * @param ?string $username
     * @param ?string $password
     * @param ?SMTPSecure $secure
     * @throws AppwriteException
     * @return string
     */
    public function createSMTPTest(string $projectId, array $emails, string $senderName, string $senderEmail, string $host, ?string $replyTo = null, ?int $port = null, ?string $username = null, ?string $password = null, ?SMTPSecure $secure = null): string
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/smtp/tests'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['emails'] = $emails;
        $apiParams['senderName'] = $senderName;
        $apiParams['senderEmail'] = $senderEmail;
        $apiParams['host'] = $host;

        if (!is_null($replyTo)) {
            $apiParams['replyTo'] = $replyTo;
        }

        if (!is_null($port)) {
            $apiParams['port'] = $port;
        }

        if (!is_null($username)) {
            $apiParams['username'] = $username;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($secure)) {
            $apiParams['secure'] = $secure;
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
     * Update the team ID of a project allowing for it to be transferred to
     * another team.
     *
     * @param string $projectId
     * @param string $teamId
     * @throws AppwriteException
     * @return array
     */
    public function updateTeam(string $projectId, string $teamId): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/team'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['teamId'] = $teamId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a custom email template for the specified locale and type. This
     * endpoint returns the template content, subject, and other configuration
     * details. 
     *
     * @param string $projectId
     * @param EmailTemplateType $type
     * @param EmailTemplateLocale $locale
     * @throws AppwriteException
     * @return array
     */
    public function getEmailTemplate(string $projectId, EmailTemplateType $type, EmailTemplateLocale $locale): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/email/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a custom email template for the specified locale and type. Use this
     * endpoint to modify the content of your email templates.
     *
     * @param string $projectId
     * @param EmailTemplateType $type
     * @param EmailTemplateLocale $locale
     * @param string $subject
     * @param string $message
     * @param ?string $senderName
     * @param ?string $senderEmail
     * @param ?string $replyTo
     * @throws AppwriteException
     * @return array
     */
    public function updateEmailTemplate(string $projectId, EmailTemplateType $type, EmailTemplateLocale $locale, string $subject, string $message, ?string $senderName = null, ?string $senderEmail = null, ?string $replyTo = null): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/email/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;
        $apiParams['subject'] = $subject;
        $apiParams['message'] = $message;

        if (!is_null($senderName)) {
            $apiParams['senderName'] = $senderName;
        }

        if (!is_null($senderEmail)) {
            $apiParams['senderEmail'] = $senderEmail;
        }

        if (!is_null($replyTo)) {
            $apiParams['replyTo'] = $replyTo;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Reset a custom email template to its default value. This endpoint removes
     * any custom content and restores the template to its original state. 
     *
     * @param string $projectId
     * @param EmailTemplateType $type
     * @param EmailTemplateLocale $locale
     * @throws AppwriteException
     * @return array
     */
    public function deleteEmailTemplate(string $projectId, EmailTemplateType $type, EmailTemplateLocale $locale): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/email/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;

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
     * Get a custom SMS template for the specified locale and type returning it's
     * contents.
     *
     * @param string $projectId
     * @param SmsTemplateType $type
     * @param SmsTemplateLocale $locale
     * @throws AppwriteException
     * @return array
     */
    public function getSMSTemplate(string $projectId, SmsTemplateType $type, SmsTemplateLocale $locale): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/sms/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a custom SMS template for the specified locale and type. Use this
     * endpoint to modify the content of your SMS templates. 
     *
     * @param string $projectId
     * @param SmsTemplateType $type
     * @param SmsTemplateLocale $locale
     * @param string $message
     * @throws AppwriteException
     * @return array
     */
    public function updateSMSTemplate(string $projectId, SmsTemplateType $type, SmsTemplateLocale $locale, string $message): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/sms/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;
        $apiParams['message'] = $message;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Reset a custom SMS template to its default value. This endpoint removes any
     * custom message and restores the template to its original state. 
     *
     * @param string $projectId
     * @param SmsTemplateType $type
     * @param SmsTemplateLocale $locale
     * @throws AppwriteException
     * @return array
     */
    public function deleteSMSTemplate(string $projectId, SmsTemplateType $type, SmsTemplateLocale $locale): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{type}', '{locale}'],
            [$projectId, $type, $locale],
            '/projects/{projectId}/templates/sms/{type}/{locale}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['type'] = $type;
        $apiParams['locale'] = $locale;

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
     * Get a list of all webhooks belonging to the project. You can use the query
     * params to filter your results. 
     *
     * @param string $projectId
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listWebhooks(string $projectId, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/webhooks'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;

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
     * Create a new webhook. Use this endpoint to configure a URL that will
     * receive events from Appwrite when specific events occur. 
     *
     * @param string $projectId
     * @param string $name
     * @param array $events
     * @param string $url
     * @param bool $security
     * @param ?bool $enabled
     * @param ?string $httpUser
     * @param ?string $httpPass
     * @throws AppwriteException
     * @return array
     */
    public function createWebhook(string $projectId, string $name, array $events, string $url, bool $security, ?bool $enabled = null, ?string $httpUser = null, ?string $httpPass = null): array
    {
        $apiPath = str_replace(
            ['{projectId}'],
            [$projectId],
            '/projects/{projectId}/webhooks'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['name'] = $name;
        $apiParams['events'] = $events;
        $apiParams['url'] = $url;
        $apiParams['security'] = $security;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($httpUser)) {
            $apiParams['httpUser'] = $httpUser;
        }

        if (!is_null($httpPass)) {
            $apiParams['httpPass'] = $httpPass;
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
     * Get a webhook by its unique ID. This endpoint returns details about a
     * specific webhook configured for a project. 
     *
     * @param string $projectId
     * @param string $webhookId
     * @throws AppwriteException
     * @return array
     */
    public function getWebhook(string $projectId, string $webhookId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{webhookId}'],
            [$projectId, $webhookId],
            '/projects/{projectId}/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['webhookId'] = $webhookId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a webhook by its unique ID. Use this endpoint to update the URL,
     * events, or status of an existing webhook. 
     *
     * @param string $projectId
     * @param string $webhookId
     * @param string $name
     * @param array $events
     * @param string $url
     * @param bool $security
     * @param ?bool $enabled
     * @param ?string $httpUser
     * @param ?string $httpPass
     * @throws AppwriteException
     * @return array
     */
    public function updateWebhook(string $projectId, string $webhookId, string $name, array $events, string $url, bool $security, ?bool $enabled = null, ?string $httpUser = null, ?string $httpPass = null): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{webhookId}'],
            [$projectId, $webhookId],
            '/projects/{projectId}/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['webhookId'] = $webhookId;
        $apiParams['name'] = $name;
        $apiParams['events'] = $events;
        $apiParams['url'] = $url;
        $apiParams['security'] = $security;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($httpUser)) {
            $apiParams['httpUser'] = $httpUser;
        }

        if (!is_null($httpPass)) {
            $apiParams['httpPass'] = $httpPass;
        }

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
     * Delete a webhook by its unique ID. Once deleted, the webhook will no longer
     * receive project events. 
     *
     * @param string $projectId
     * @param string $webhookId
     * @throws AppwriteException
     * @return string
     */
    public function deleteWebhook(string $projectId, string $webhookId): string
    {
        $apiPath = str_replace(
            ['{projectId}', '{webhookId}'],
            [$projectId, $webhookId],
            '/projects/{projectId}/webhooks/{webhookId}'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['webhookId'] = $webhookId;

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
     * Update the webhook signature key. This endpoint can be used to regenerate
     * the signature key used to sign and validate payload deliveries for a
     * specific webhook. 
     *
     * @param string $projectId
     * @param string $webhookId
     * @throws AppwriteException
     * @return array
     */
    public function updateWebhookSignature(string $projectId, string $webhookId): array
    {
        $apiPath = str_replace(
            ['{projectId}', '{webhookId}'],
            [$projectId, $webhookId],
            '/projects/{projectId}/webhooks/{webhookId}/signature'
        );

        $apiParams = [];
        $apiParams['projectId'] = $projectId;
        $apiParams['webhookId'] = $webhookId;

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