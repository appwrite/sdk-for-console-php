<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\RegistrationType;
use Appwrite\Enums\FilterType;

class Domains extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     *     List all domains registered for this project. This endpoint supports
     * pagination.
     *
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
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
     *     Create a new domain. Before creating a domain, you need to ensure that
     * your DNS provider is properly configured. After creating the domain, you
     * can use the verification endpoint to check if the domain is ready to be
     * used.
     *
     * @param string $teamId
     * @param string $domain
     * @throws AppwriteException
     * @return array
     */
    public function create(string $teamId, string $domain): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains'
        );

        $apiParams = [];
        $apiParams['teamId'] = $teamId;
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
     *     Get the registration price for a domain name.
     *
     * @param string $domain
     * @param ?int $periodYears
     * @param ?RegistrationType $registrationType
     * @throws AppwriteException
     * @return array
     */
    public function getPrice(string $domain, ?int $periodYears = null, ?RegistrationType $registrationType = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains/price'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;

        if (!is_null($periodYears)) {
            $apiParams['periodYears'] = $periodYears;
        }

        if (!is_null($registrationType)) {
            $apiParams['registrationType'] = $registrationType;
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
     *     List domain suggestions.
     *
     * @param string $query
     * @param ?array $tlds
     * @param ?int $limit
     * @param ?FilterType $filterType
     * @param ?int $priceMax
     * @param ?int $priceMin
     * @throws AppwriteException
     * @return array
     */
    public function listSuggestions(string $query, ?array $tlds = null, ?int $limit = null, ?FilterType $filterType = null, ?int $priceMax = null, ?int $priceMin = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/domains/suggestions'
        );

        $apiParams = [];
        $apiParams['query'] = $query;

        if (!is_null($tlds)) {
            $apiParams['tlds'] = $tlds;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($filterType)) {
            $apiParams['filterType'] = $filterType;
        }

        if (!is_null($priceMax)) {
            $apiParams['priceMax'] = $priceMax;
        }

        if (!is_null($priceMin)) {
            $apiParams['priceMin'] = $priceMin;
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
     *     Get a domain by its unique ID.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a domain by its unique ID. This endpoint can be used to delete a
     * domain from your project.
     * Once deleted, the domain will no longer be available for use and all
     * associated resources will be removed.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $domainId): string
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     Verify which NS records are used and update the domain accordingly.
     * This will check the domain's
     *     nameservers and update the domain's status based on whether the
     * nameservers match the expected
     *     Appwrite nameservers.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function updateNameservers(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/nameservers'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List Google Workspace DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetGoogleWorkspace(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/google-workspace'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add Google Workspace DNS records to the domain. This will create the
     * required MX records 
     *     for Google Workspace email hosting.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetGoogleWorkspace(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/google-workspace'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List iCloud DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetICloud(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/icloud'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add iCloud DNS records to the domain. This will create the required MX
     * and SPF records
     *     for using iCloud email services with your domain.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetICloud(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/icloud'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List Mailgun DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetMailgun(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/mailgun'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add Mailgun DNS records to the domain. This endpoint will create the
     * required DNS records 
     *     for Mailgun in the specified domain.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetMailgun(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/mailgun'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List Outlook DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetOutlook(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/outlook'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add Outlook DNS records to the domain. This will create the required MX
     * records
     *     for setting up Outlook email hosting for your domain.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetOutlook(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/outlook'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List ProtonMail DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetProtonMail(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/proton-mail'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add ProtonMail DNS records to the domain. This will create the required
     * MX records
     *     for using ProtonMail with your custom domain.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetProtonMail(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/proton-mail'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List Zoho DNS records.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getPresetZoho(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/zoho'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Add Zoho Mail DNS records to the domain. This will create the required
     * MX records
     *     for setting up Zoho Mail on your domain.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function createPresetZoho(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/presets/zoho'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     *     List DNS records for a given domain. You can use this endpoint to list
     * all the DNS records
     *     associated with your domain.
     *
     * @param string $domainId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listRecords(string $domainId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

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
     * Create a new A record for the given domain. A records are used to point a
     * domain name 
     * to an IPv4 address. The record value should be a valid IPv4 address.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/a'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing A record for the given domain. This endpoint allows
     * you to modify 
     *     the properties of an A record including its name (subdomain), IPv4
     * address, TTL, 
     *     and optional comment.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/a/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new AAAA record for the given domain. This endpoint allows you
     * to add a new IPv6 DNS record 
     *     to your domain. The record will be used to point a hostname to an IPv6
     * address.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordAAAA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/aaaa'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing AAAA record for the given domain. This endpoint
     * allows you to modify
     *     the properties of an existing AAAA record, including its name
     * (subdomain), IPv6 address,
     *     TTL, and optional comment.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordAAAA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/aaaa/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new ALIAS record for the given domain. This record type can be
     * used to point your domain 
     *     to another domain name that will serve as an alias. This is
     * particularly useful when you want to 
     *     map your domain to a target domain that may change its IP address.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordAlias(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/alias'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing ALIAS record for the specified domain. This endpoint
     * allows you to modify
     *     the properties of an existing ALIAS record including its name, target
     * domain, TTL, and comment.
     *     
     *     The ALIAS record type is similar to a CNAME record but can be used at
     * the zone apex (root domain).
     *     It provides a way to map one domain name to another.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordAlias(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/alias/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     * Create a new CAA record for the given domain. CAA records are used to
     * specify which 
     * Certificate Authorities (CAs) are allowed to issue SSL/TLS certificates for
     * your domain.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordCAA(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/caa'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing CAA record for the given domain. A CAA
     * (Certification Authority Authorization) 
     *     record is used to specify which certificate authorities (CAs) are
     * authorized to issue certificates 
     *     for a domain.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordCAA(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/caa/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new CNAME record for the given domain.
     *     
     *     A CNAME record maps a subdomain to another domain name, allowing you to
     * create aliases 
     *     for your domain. For example, you can create a CNAME record to point
     * 'blog.example.com' 
     *     to 'example.wordpress.com'.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordCNAME(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/cname'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing CNAME record for the given domain.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordCNAME(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/cname/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new HTTPS record for the given domain. This record is used to
     * configure HTTPS 
     *     settings for your domain, enabling secure communication over SSL/TLS.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordHTTPS(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/https'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     * Update an existing HTTPS record for the given domain. This endpoint allows
     * you to modify 
     * the properties of an HTTPS record associated with your domain, including
     * the name (subdomain), 
     * target value, TTL, and optional comment.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordHTTPS(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/https/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new MX record for the given domain. MX records are used to
     * define the mail servers responsible 
     *     for accepting email messages for the domain. Multiple MX records can be
     * created with different priorities.
     *     The priority parameter determines the order in which mail servers are
     * used, with lower values indicating 
     *     higher priority.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param int $priority
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordMX(string $domainId, string $name, string $value, int $ttl, int $priority, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/mx'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing MX record for the given domain.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param int $priority
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordMX(string $domainId, string $recordId, string $name, string $value, int $ttl, int $priority, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/mx/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new NS record for the given domain. NS records specify the
     * nameservers that are used 
     *     to resolve the domain name to IP addresses. Each domain can have
     * multiple NS records.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordNS(string $domainId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/ns'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing NS record for the given domain. This endpoint allows
     * you to modify 
     *     the properties of an NS (nameserver) record associated with your
     * domain. You can update 
     *     the record name (subdomain), target nameserver value, TTL, and add or
     * modify comments 
     *     for better record management.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordNS(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/ns/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new SRV record for the given domain. SRV records are used to
     * define the location 
     *     of servers for specific services. For example, they can be used to
     * specify which server 
     *     handles a specific service like SIP or XMPP for the domain.
     *
     * @param string $domainId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param int $priority
     * @param int $weight
     * @param int $port
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordSRV(string $domainId, string $name, string $value, int $ttl, int $priority, int $weight, int $port, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/srv'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;
        $apiParams['weight'] = $weight;
        $apiParams['port'] = $port;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing SRV record for the given domain.
     *     
     *     Required parameters:
     *     - domainId: Domain unique ID
     *     - recordId: DNS record unique ID
     *     - name: Record name (service name)
     *     - value: Target hostname for this SRV record
     *     - ttl: Time to live, in seconds
     *     - priority: Record priority
     *     - weight: Record weight
     *     - port: Port number for the service
     *     
     *     Optional parameters:
     *     - comment: A comment for this record
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param int $priority
     * @param int $weight
     * @param int $port
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordSRV(string $domainId, string $recordId, string $name, string $value, int $ttl, int $priority, int $weight, int $port, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/srv/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;
        $apiParams['priority'] = $priority;
        $apiParams['weight'] = $weight;
        $apiParams['port'] = $port;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Create a new TXT record for the given domain. TXT records can be used 
     *     to provide additional information about your domain, such as domain 
     *     verification records, SPF records, or DKIM records.
     *
     * @param string $domainId
     * @param string $name
     * @param int $ttl
     * @param ?string $value
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function createRecordTXT(string $domainId, string $name, int $ttl, ?string $value = null, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/records/txt'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['name'] = $name;
        $apiParams['ttl'] = $ttl;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Update an existing TXT record for the given domain.
     *     
     *     Update the TXT record details for a specific domain by providing the
     * domain ID,
     *     record ID, and the new record configuration including name, value, TTL,
     * and an optional comment.
     *
     * @param string $domainId
     * @param string $recordId
     * @param string $name
     * @param string $value
     * @param int $ttl
     * @param ?string $comment
     * @throws AppwriteException
     * @return array
     */
    public function updateRecordTXT(string $domainId, string $recordId, string $name, string $value, int $ttl, ?string $comment = null): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/txt/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;
        $apiParams['name'] = $name;
        $apiParams['value'] = $value;
        $apiParams['ttl'] = $ttl;

        if (!is_null($comment)) {
            $apiParams['comment'] = $comment;
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
     *     Get a single DNS record for a given domain by record ID.
     *     
     *     This endpoint allows you to retrieve a specific DNS record associated
     * with a domain
     *     using its unique identifier. The record contains information about the
     * DNS configuration
     *     such as type, value, and TTL settings.
     *
     * @param string $domainId
     * @param string $recordId
     * @throws AppwriteException
     * @return array
     */
    public function getRecord(string $domainId, string $recordId): array
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     *     Delete a DNS record for the given domain. This endpoint allows you to
     * delete an existing DNS record 
     *     from a specific domain.
     *
     * @param string $domainId
     * @param string $recordId
     * @throws AppwriteException
     * @return string
     */
    public function deleteRecord(string $domainId, string $recordId): string
    {
        $apiPath = str_replace(
            ['{domainId}', '{recordId}'],
            [$domainId, $recordId],
            '/domains/{domainId}/records/{recordId}'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['recordId'] = $recordId;

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
     *     Update the team ID for a specific domain. This endpoint requires admin
     * access.
     *     
     *     Updating the team ID will transfer ownership and access control of the
     * domain
     *     and all its DNS records to the new team.
     *
     * @param string $domainId
     * @param string $teamId
     * @throws AppwriteException
     * @return array
     */
    public function updateTeam(string $domainId, string $teamId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/team'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
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
     *     Retrieve the DNS zone file for the given domain. This endpoint will
     * return the DNS
     *     zone file in a standardized format that can be used to configure DNS
     * servers.
     *
     * @param string $domainId
     * @throws AppwriteException
     * @return array
     */
    public function getZone(string $domainId): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/zone'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the DNS zone for the given domain using the provided zone file
     * content.
     * All parsed records are imported and then the main domain document is
     * returned.
     *
     * @param string $domainId
     * @param string $content
     * @throws AppwriteException
     * @return array
     */
    public function updateZone(string $domainId, string $content): array
    {
        $apiPath = str_replace(
            ['{domainId}'],
            [$domainId],
            '/domains/{domainId}/zone'
        );

        $apiParams = [];
        $apiParams['domainId'] = $domainId;
        $apiParams['content'] = $content;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}