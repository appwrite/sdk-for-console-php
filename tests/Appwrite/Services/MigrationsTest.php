<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Resources;

final class MigrationsTest extends TestCase {
    private $client;
    private $migrations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->migrations = new Migrations($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "migrations" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateAppwriteMigration(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createAppwriteMigration(
            array(Resources::USER()),
            "https://example.com",
            "<PROJECT_ID>",
            "<API_KEY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetAppwriteReport(): void {

        $data = array(
            "user" => 20,
            "team" => 20,
            "database" => 20,
            "row" => 20,
            "file" => 20,
            "bucket" => 20,
            "function" => 20,
            "size" => 30000,
            "version" => "1.4.0");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->getAppwriteReport(
            array(Resources::USER()),
            "https://example.com",
            "<PROJECT_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateCSVExport(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createCSVExport(
            "<ID1:ID2>",
            "<FILENAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateCSVImport(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createCSVImport(
            "<BUCKET_ID>",
            "<FILE_ID>",
            "<ID1:ID2>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFirebaseMigration(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createFirebaseMigration(
            array(Resources::USER()),
            "<SERVICE_ACCOUNT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFirebaseReport(): void {

        $data = array(
            "user" => 20,
            "team" => 20,
            "database" => 20,
            "row" => 20,
            "file" => 20,
            "bucket" => 20,
            "function" => 20,
            "size" => 30000,
            "version" => "1.4.0");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->getFirebaseReport(
            array(Resources::USER()),
            "<SERVICE_ACCOUNT>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateNHostMigration(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createNHostMigration(
            array(Resources::USER()),
            "<SUBDOMAIN>",
            "<REGION>",
            "<ADMIN_SECRET>",
            "<DATABASE>",
            "<USERNAME>",
            "<PASSWORD>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetNHostReport(): void {

        $data = array(
            "user" => 20,
            "team" => 20,
            "database" => 20,
            "row" => 20,
            "file" => 20,
            "bucket" => 20,
            "function" => 20,
            "size" => 30000,
            "version" => "1.4.0");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->getNHostReport(
            array(Resources::USER()),
            "<SUBDOMAIN>",
            "<REGION>",
            "<ADMIN_SECRET>",
            "<DATABASE>",
            "<USERNAME>",
            "<PASSWORD>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSupabaseMigration(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->createSupabaseMigration(
            array(Resources::USER()),
            "https://example.com",
            "<API_KEY>",
            "<DATABASE_HOST>",
            "<USERNAME>",
            "<PASSWORD>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSupabaseReport(): void {

        $data = array(
            "user" => 20,
            "team" => 20,
            "database" => 20,
            "row" => 20,
            "file" => 20,
            "bucket" => 20,
            "function" => 20,
            "size" => 30000,
            "version" => "1.4.0");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->getSupabaseReport(
            array(Resources::USER()),
            "https://example.com",
            "<API_KEY>",
            "<DATABASE_HOST>",
            "<USERNAME>",
            "<PASSWORD>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->get(
            "<MIGRATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodRetry(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => array(),
            "resourceId" => "databaseId:collectionId",
            "statusCounters" => array(),
            "resourceData" => array(),
            "errors" => array(),
            "options" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->retry(
            "<MIGRATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->migrations->delete(
            "<MIGRATION_ID>"
        );

        $this->assertSame($data, $response);
    }

}
