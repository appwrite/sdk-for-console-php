<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\VCSDetectionType;

final class VcsTest extends TestCase {
    private $client;
    private $vcs;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->vcs = new Vcs($this->client);
    }

    public function testMethodCreateRepositoryDetection(): void {

        $data = array(
            "framework" => "nuxt",
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "outputDirectory" => "dist");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->createRepositoryDetection(
            "<INSTALLATION_ID>",
            "<PROVIDER_REPOSITORY_ID>",
            VCSDetectionType::RUNTIME()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRepositories(): void {

        $data = array(
            "total" => 5,
            "frameworkProviderRepositories" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->listRepositories(
            "<INSTALLATION_ID>",
            VCSDetectionType::RUNTIME()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRepository(): void {

        $data = array(
            "id" => "5e5ea5c16897e",
            "name" => "appwrite",
            "organization" => "appwrite",
            "provider" => "github",
            "private" => true,
            "defaultBranch" => "main",
            "providerInstallationId" => "108104697",
            "authorized" => true,
            "pushedAt" => "datetime",
            "variables" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->createRepository(
            "<INSTALLATION_ID>",
            "<NAME>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetRepository(): void {

        $data = array(
            "id" => "5e5ea5c16897e",
            "name" => "appwrite",
            "organization" => "appwrite",
            "provider" => "github",
            "private" => true,
            "defaultBranch" => "main",
            "providerInstallationId" => "108104697",
            "authorized" => true,
            "pushedAt" => "datetime",
            "variables" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->getRepository(
            "<INSTALLATION_ID>",
            "<PROVIDER_REPOSITORY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRepositoryBranches(): void {

        $data = array(
            "total" => 5,
            "branches" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->listRepositoryBranches(
            "<INSTALLATION_ID>",
            "<PROVIDER_REPOSITORY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetRepositoryContents(): void {

        $data = array(
            "total" => 5,
            "contents" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->getRepositoryContents(
            "<INSTALLATION_ID>",
            "<PROVIDER_REPOSITORY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateExternalDeployments(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->updateExternalDeployments(
            "<INSTALLATION_ID>",
            "<REPOSITORY_ID>",
            "<PROVIDER_PULL_REQUEST_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListInstallations(): void {

        $data = array(
            "total" => 5,
            "installations" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->listInstallations(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetInstallation(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "github",
            "organization" => "appwrite",
            "providerInstallationId" => "5322");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->getInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteInstallation(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->vcs->deleteInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertSame($data, $response);
    }

}
