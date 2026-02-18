<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\ProjectUsageRange;

final class ProjectTest extends TestCase {
    private $client;
    private $project;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->project = new Project($this->client);
    }

    public function testMethodGetUsage(): void {

        $data = array(
            "executionsTotal" => 0,
            "documentsTotal" => 0,
            "rowsTotal" => 0,
            "databasesTotal" => 0,
            "databasesStorageTotal" => 0,
            "usersTotal" => 0,
            "filesStorageTotal" => 0,
            "functionsStorageTotal" => 0,
            "buildsStorageTotal" => 0,
            "deploymentsStorageTotal" => 0,
            "bucketsTotal" => 0,
            "executionsMbSecondsTotal" => 0,
            "buildsMbSecondsTotal" => 0,
            "databasesReadsTotal" => 0,
            "databasesWritesTotal" => 0,
            "requests" => array(),
            "network" => array(),
            "users" => array(),
            "executions" => array(),
            "executionsBreakdown" => array(),
            "bucketsBreakdown" => array(),
            "databasesStorageBreakdown" => array(),
            "executionsMbSecondsBreakdown" => array(),
            "buildsMbSecondsBreakdown" => array(),
            "functionsStorageBreakdown" => array(),
            "authPhoneTotal" => 0,
            "authPhoneEstimate" => 0,
            "authPhoneCountryBreakdown" => array(),
            "databasesReads" => array(),
            "databasesWrites" => array(),
            "imageTransformations" => array(),
            "imageTransformationsTotal" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getUsage(
            "",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListVariables(): void {

        $data = array(
            "total" => 5,
            "variables" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listVariables(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createVariable(
            "<KEY>",
            "<VALUE>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getVariable(
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateVariable(
            "<VARIABLE_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteVariable(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->deleteVariable(
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
