<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RegistrationType;
use Appwrite\Enums\FilterType;

final class DomainsTest extends TestCase {
    private $client;
    private $domains;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->domains = new Domains($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "domains" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->create(
            "<TEAM_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPrice(): void {

        $data = array(
            "domain" => "example.com",
            "tld" => "com",
            "available" => true,
            "price" => 25.99,
            "periodYears" => 1,
            "premium" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPrice(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePurchase(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPurchase(
            "",
            "<ORGANIZATION_ID>",
            "<FIRST_NAME>",
            "<LAST_NAME>",
            "email@example.com",
            "+12065550100",
            "<BILLING_ADDRESS_ID>",
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSuggestions(): void {

        $data = array(
            "total" => 5,
            "suggestions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->listSuggestions(
            "<QUERY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTransferIn(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createTransferIn(
            "",
            "<ORGANIZATION_ID>",
            "<AUTH_CODE>",
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTransferOut(): void {

        $data = array(
            "authCode" => "mock_1a2b3c4d");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createTransferOut(
            "<DOMAIN_ID>",
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->get(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->delete(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateNameservers(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateNameservers(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetGoogleWorkspace(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetGoogleWorkspace(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetGoogleWorkspace(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetGoogleWorkspace(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetICloud(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetICloud(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetICloud(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetICloud(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetMailgun(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetMailgun(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetMailgun(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetMailgun(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetOutlook(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetOutlook(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetOutlook(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetOutlook(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetProtonMail(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetProtonMail(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetProtonMail(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetProtonMail(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPresetZoho(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getPresetZoho(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePresetZoho(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createPresetZoho(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRecords(): void {

        $data = array(
            "total" => 5,
            "dnsRecords" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->listRecords(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordA(
            "<DOMAIN_ID>",
            "<NAME>",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordAAAA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordAAAA(
            "<DOMAIN_ID>",
            "<NAME>",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordAAAA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordAAAA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordAlias(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordAlias(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordAlias(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordAlias(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordCAA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordCAA(
            "<DOMAIN_ID>",
            "",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordCAA(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordCAA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "",
            "",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordCNAME(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordCNAME(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordCNAME(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordCNAME(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordHTTPS(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordHTTPS(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordHTTPS(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordHTTPS(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordMX(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordMX(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordMX(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordMX(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordNS(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordNS(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordNS(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordNS(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordSRV(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordSRV(
            "<DOMAIN_ID>",
            "<NAME>",
            "<VALUE>",
            1,
            1,
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordSRV(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordSRV(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1,
            1,
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecordTXT(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->createRecordTXT(
            "<DOMAIN_ID>",
            "<NAME>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecordTXT(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateRecordTXT(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "<NAME>",
            "<VALUE>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetRecord(): void {

        $data = array(
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getRecord(
            "<DOMAIN_ID>",
            "<RECORD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteRecord(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->deleteRecord(
            "<DOMAIN_ID>",
            "<RECORD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTeam(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateTeam(
            "<DOMAIN_ID>",
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTransferStatus(): void {

        $data = array(
            "status" => "pending_registry",
            "reason" => "Transfer in progress",
            "timestamp" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getTransferStatus(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetZone(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->getZone(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateZone(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "paymentStatus" => "pending",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => array(),
            "transferStatus" => "pending");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->domains->updateZone(
            "<DOMAIN_ID>",
            "<CONTENT>"
        );

        $this->assertSame($data, $response);
    }

}
