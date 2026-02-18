<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Resources;

class Migrations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List all migrations in the current project. This endpoint returns a list of
     * all migrations including their status, progress, and any errors that
     * occurred during the migration process.
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
            '/migrations'
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
     * Migrate data from another Appwrite project to your current project. This
     * endpoint allows you to migrate resources like databases, collections,
     * documents, users, and files from an existing Appwrite project. 
     *
     * @param array $resources
     * @param string $endpoint
     * @param string $projectId
     * @param string $apiKey
     * @throws AppwriteException
     * @return array
     */
    public function createAppwriteMigration(array $resources, string $endpoint, string $projectId, string $apiKey): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/appwrite'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['projectId'] = $projectId;
        $apiParams['apiKey'] = $apiKey;

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
     * Generate a report of the data in an Appwrite project before migrating. This
     * endpoint analyzes the source project and returns information about the
     * resources that can be migrated.
     *
     * @param array $resources
     * @param string $endpoint
     * @param string $projectID
     * @param string $key
     * @throws AppwriteException
     * @return array
     */
    public function getAppwriteReport(array $resources, string $endpoint, string $projectID, string $key): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/appwrite/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['projectID'] = $projectID;
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Export documents to a CSV file from your Appwrite database. This endpoint
     * allows you to export documents to a CSV file stored in a secure internal
     * bucket. You'll receive an email with a download link when the export is
     * complete.
     *
     * @param string $resourceId
     * @param string $filename
     * @param ?array $columns
     * @param ?array $queries
     * @param ?string $delimiter
     * @param ?string $enclosure
     * @param ?string $escape
     * @param ?bool $header
     * @param ?bool $notify
     * @throws AppwriteException
     * @return array
     */
    public function createCSVExport(string $resourceId, string $filename, ?array $columns = null, ?array $queries = null, ?string $delimiter = null, ?string $enclosure = null, ?string $escape = null, ?bool $header = null, ?bool $notify = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/csv/exports'
        );

        $apiParams = [];
        $apiParams['resourceId'] = $resourceId;
        $apiParams['filename'] = $filename;

        if (!is_null($columns)) {
            $apiParams['columns'] = $columns;
        }

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($delimiter)) {
            $apiParams['delimiter'] = $delimiter;
        }

        if (!is_null($enclosure)) {
            $apiParams['enclosure'] = $enclosure;
        }

        if (!is_null($escape)) {
            $apiParams['escape'] = $escape;
        }

        if (!is_null($header)) {
            $apiParams['header'] = $header;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
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
     * Import documents from a CSV file into your Appwrite database. This endpoint
     * allows you to import documents from a CSV file uploaded to Appwrite Storage
     * bucket.
     *
     * @param string $bucketId
     * @param string $fileId
     * @param string $resourceId
     * @param ?bool $internalFile
     * @throws AppwriteException
     * @return array
     */
    public function createCSVImport(string $bucketId, string $fileId, string $resourceId, ?bool $internalFile = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/csv/imports'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($internalFile)) {
            $apiParams['internalFile'] = $internalFile;
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
     * Migrate data from a Firebase project to your Appwrite project. This
     * endpoint allows you to migrate resources like authentication and other
     * supported services from a Firebase project. 
     *
     * @param array $resources
     * @param string $serviceAccount
     * @throws AppwriteException
     * @return array
     */
    public function createFirebaseMigration(array $resources, string $serviceAccount): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/firebase'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['serviceAccount'] = $serviceAccount;

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
     * Generate a report of the data in a Firebase project before migrating. This
     * endpoint analyzes the source project and returns information about the
     * resources that can be migrated.
     *
     * @param array $resources
     * @param string $serviceAccount
     * @throws AppwriteException
     * @return array
     */
    public function getFirebaseReport(array $resources, string $serviceAccount): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/firebase/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['serviceAccount'] = $serviceAccount;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Migrate data from an NHost project to your Appwrite project. This endpoint
     * allows you to migrate resources like authentication, databases, and other
     * supported services from an NHost project. 
     *
     * @param array $resources
     * @param string $subdomain
     * @param string $region
     * @param string $adminSecret
     * @param string $database
     * @param string $username
     * @param string $password
     * @param ?int $port
     * @throws AppwriteException
     * @return array
     */
    public function createNHostMigration(array $resources, string $subdomain, string $region, string $adminSecret, string $database, string $username, string $password, ?int $port = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/nhost'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['subdomain'] = $subdomain;
        $apiParams['region'] = $region;
        $apiParams['adminSecret'] = $adminSecret;
        $apiParams['database'] = $database;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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
     * Generate a detailed report of the data in an NHost project before
     * migrating. This endpoint analyzes the source project and returns
     * information about the resources that can be migrated. 
     *
     * @param array $resources
     * @param string $subdomain
     * @param string $region
     * @param string $adminSecret
     * @param string $database
     * @param string $username
     * @param string $password
     * @param ?int $port
     * @throws AppwriteException
     * @return array
     */
    public function getNHostReport(array $resources, string $subdomain, string $region, string $adminSecret, string $database, string $username, string $password, ?int $port = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/nhost/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['subdomain'] = $subdomain;
        $apiParams['region'] = $region;
        $apiParams['adminSecret'] = $adminSecret;
        $apiParams['database'] = $database;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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
     * Migrate data from a Supabase project to your Appwrite project. This
     * endpoint allows you to migrate resources like authentication, databases,
     * and other supported services from a Supabase project. 
     *
     * @param array $resources
     * @param string $endpoint
     * @param string $apiKey
     * @param string $databaseHost
     * @param string $username
     * @param string $password
     * @param ?int $port
     * @throws AppwriteException
     * @return array
     */
    public function createSupabaseMigration(array $resources, string $endpoint, string $apiKey, string $databaseHost, string $username, string $password, ?int $port = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/supabase'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['apiKey'] = $apiKey;
        $apiParams['databaseHost'] = $databaseHost;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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
     * Generate a report of the data in a Supabase project before migrating. This
     * endpoint analyzes the source project and returns information about the
     * resources that can be migrated. 
     *
     * @param array $resources
     * @param string $endpoint
     * @param string $apiKey
     * @param string $databaseHost
     * @param string $username
     * @param string $password
     * @param ?int $port
     * @throws AppwriteException
     * @return array
     */
    public function getSupabaseReport(array $resources, string $endpoint, string $apiKey, string $databaseHost, string $username, string $password, ?int $port = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/supabase/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['apiKey'] = $apiKey;
        $apiParams['databaseHost'] = $databaseHost;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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
     * Get a migration by its unique ID. This endpoint returns detailed
     * information about a specific migration including its current status,
     * progress, and any errors that occurred during the migration process. 
     *
     * @param string $migrationId
     * @throws AppwriteException
     * @return array
     */
    public function get(string $migrationId): array
    {
        $apiPath = str_replace(
            ['{migrationId}'],
            [$migrationId],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['migrationId'] = $migrationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Retry a failed migration. This endpoint allows you to retry a migration
     * that has previously failed.
     *
     * @param string $migrationId
     * @throws AppwriteException
     * @return array
     */
    public function retry(string $migrationId): array
    {
        $apiPath = str_replace(
            ['{migrationId}'],
            [$migrationId],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['migrationId'] = $migrationId;

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
     * Delete a migration by its unique ID. This endpoint allows you to remove a
     * migration from your project's migration history. 
     *
     * @param string $migrationId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $migrationId): string
    {
        $apiPath = str_replace(
            ['{migrationId}'],
            [$migrationId],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['migrationId'] = $migrationId;

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