<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\ConsoleResourceType;

final class ConsoleTest extends TestCase {
    private $client;
    private $console;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->console = new Console($this->client);
    }

    public function testMethodGetResource(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getResource(
            "<VALUE>",
            ConsoleResourceType::RULES()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodVariables(): void {

        $data = array(
            "_APP_DOMAIN_TARGET_CNAME" => "appwrite.io",
            "_APP_DOMAIN_TARGET_A" => "127.0.0.1",
            "_APP_COMPUTE_BUILD_TIMEOUT" => 900,
            "_APP_DOMAIN_TARGET_AAAA" => "::1",
            "_APP_DOMAIN_TARGET_CAA" => "digicert.com",
            "_APP_STORAGE_LIMIT" => 30000000,
            "_APP_COMPUTE_SIZE_LIMIT" => 30000000,
            "_APP_USAGE_STATS" => "enabled",
            "_APP_VCS_ENABLED" => true,
            "_APP_DOMAIN_ENABLED" => true,
            "_APP_ASSISTANT_ENABLED" => true,
            "_APP_DOMAIN_SITES" => "sites.localhost,sites.example.com",
            "_APP_DOMAIN_FUNCTIONS" => "functions.localhost",
            "_APP_OPTIONS_FORCE_HTTPS" => "enabled",
            "_APP_DOMAINS_NAMESERVERS" => "ns1.example.com,ns2.example.com");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->variables(
        );

        $this->assertSame($data, $response);
    }

}
