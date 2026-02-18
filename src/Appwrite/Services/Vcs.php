<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\VCSDetectionType;

class Vcs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Analyze a GitHub repository to automatically detect the programming
     * language and runtime environment. This endpoint scans the repository's
     * files and language statistics to determine the appropriate runtime settings
     * for your function. The GitHub installation must be properly configured and
     * the repository must be accessible through your installation for this
     * endpoint to work.
     *
     * @param string $installationId
     * @param string $providerRepositoryId
     * @param VCSDetectionType $type
     * @param ?string $providerRootDirectory
     * @throws AppwriteException
     * @return array
     */
    public function createRepositoryDetection(string $installationId, string $providerRepositoryId, VCSDetectionType $type, ?string $providerRootDirectory = null): array
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/vcs/github/installations/{installationId}/detections'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['providerRepositoryId'] = $providerRepositoryId;
        $apiParams['type'] = $type;

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
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
     * Get a list of GitHub repositories available through your installation. This
     * endpoint returns repositories with their basic information, detected
     * runtime environments, and latest push dates. You can optionally filter
     * repositories using a search term. Each repository's runtime is
     * automatically detected based on its contents and language statistics. The
     * GitHub installation must be properly configured for this endpoint to work.
     *
     * @param string $installationId
     * @param VCSDetectionType $type
     * @param ?string $search
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listRepositories(string $installationId, VCSDetectionType $type, ?string $search = null, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/vcs/github/installations/{installationId}/providerRepositories'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['type'] = $type;

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

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
     * Create a new GitHub repository through your installation. This endpoint
     * allows you to create either a public or private repository by specifying a
     * name and visibility setting. The repository will be created under your
     * GitHub user account or organization, depending on your installation type.
     * The GitHub installation must be properly configured and have the necessary
     * permissions for repository creation.
     *
     * @param string $installationId
     * @param string $name
     * @param bool $xprivate
     * @throws AppwriteException
     * @return array
     */
    public function createRepository(string $installationId, string $name, bool $xprivate): array
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/vcs/github/installations/{installationId}/providerRepositories'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['name'] = $name;
        $apiParams['private'] = $xprivate;

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
     * Get detailed information about a specific GitHub repository from your
     * installation. This endpoint returns repository details including its ID,
     * name, visibility status, organization, and latest push date. The GitHub
     * installation must be properly configured and have access to the requested
     * repository for this endpoint to work.
     *
     * @param string $installationId
     * @param string $providerRepositoryId
     * @throws AppwriteException
     * @return array
     */
    public function getRepository(string $installationId, string $providerRepositoryId): array
    {
        $apiPath = str_replace(
            ['{installationId}', '{providerRepositoryId}'],
            [$installationId, $providerRepositoryId],
            '/vcs/github/installations/{installationId}/providerRepositories/{providerRepositoryId}'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['providerRepositoryId'] = $providerRepositoryId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all branches from a GitHub repository in your installation.
     * This endpoint returns the names of all branches in the repository and their
     * total count. The GitHub installation must be properly configured and have
     * access to the requested repository for this endpoint to work.
     * 
     *
     * @param string $installationId
     * @param string $providerRepositoryId
     * @throws AppwriteException
     * @return array
     */
    public function listRepositoryBranches(string $installationId, string $providerRepositoryId): array
    {
        $apiPath = str_replace(
            ['{installationId}', '{providerRepositoryId}'],
            [$installationId, $providerRepositoryId],
            '/vcs/github/installations/{installationId}/providerRepositories/{providerRepositoryId}/branches'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['providerRepositoryId'] = $providerRepositoryId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of files and directories from a GitHub repository connected to
     * your project. This endpoint returns the contents of a specified repository
     * path, including file names, sizes, and whether each item is a file or
     * directory. The GitHub installation must be properly configured and the
     * repository must be accessible through your installation for this endpoint
     * to work.
     *
     * @param string $installationId
     * @param string $providerRepositoryId
     * @param ?string $providerRootDirectory
     * @param ?string $providerReference
     * @throws AppwriteException
     * @return array
     */
    public function getRepositoryContents(string $installationId, string $providerRepositoryId, ?string $providerRootDirectory = null, ?string $providerReference = null): array
    {
        $apiPath = str_replace(
            ['{installationId}', '{providerRepositoryId}'],
            [$installationId, $providerRepositoryId],
            '/vcs/github/installations/{installationId}/providerRepositories/{providerRepositoryId}/contents'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['providerRepositoryId'] = $providerRepositoryId;

        if (!is_null($providerRootDirectory)) {
            $apiParams['providerRootDirectory'] = $providerRootDirectory;
        }

        if (!is_null($providerReference)) {
            $apiParams['providerReference'] = $providerReference;
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
     * Authorize and create deployments for a GitHub pull request in your project.
     * This endpoint allows external contributions by creating deployments from
     * pull requests, enabling preview environments for code review. The pull
     * request must be open and not previously authorized. The GitHub installation
     * must be properly configured and have access to both the repository and pull
     * request for this endpoint to work.
     *
     * @param string $installationId
     * @param string $repositoryId
     * @param string $providerPullRequestId
     * @throws AppwriteException
     * @return string
     */
    public function updateExternalDeployments(string $installationId, string $repositoryId, string $providerPullRequestId): string
    {
        $apiPath = str_replace(
            ['{installationId}', '{repositoryId}'],
            [$installationId, $repositoryId],
            '/vcs/github/installations/{installationId}/repositories/{repositoryId}'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;
        $apiParams['repositoryId'] = $repositoryId;
        $apiParams['providerPullRequestId'] = $providerPullRequestId;

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
     * List all VCS installations configured for the current project. This
     * endpoint returns a list of installations including their provider,
     * organization, and other configuration details.
     * 
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listInstallations(?array $queries = null, ?string $search = null, ?bool $total = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/vcs/installations'
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
     * Get a VCS installation by its unique ID. This endpoint returns the
     * installation's details including its provider, organization, and
     * configuration. 
     *
     * @param string $installationId
     * @throws AppwriteException
     * @return array
     */
    public function getInstallation(string $installationId): array
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/vcs/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a VCS installation by its unique ID. This endpoint removes the
     * installation and all its associated repositories from the project.
     *
     * @param string $installationId
     * @throws AppwriteException
     * @return string
     */
    public function deleteInstallation(string $installationId): string
    {
        $apiPath = str_replace(
            ['{installationId}'],
            [$installationId],
            '/vcs/installations/{installationId}'
        );

        $apiParams = [];
        $apiParams['installationId'] = $installationId;

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