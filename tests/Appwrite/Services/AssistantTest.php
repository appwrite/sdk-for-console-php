<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AssistantTest extends TestCase {
    private $client;
    private $assistant;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->assistant = new Assistant($this->client);
    }

    public function testMethodChat(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->assistant->chat(
            "<PROMPT>"
        );

        $this->assertSame($data, $response);
    }

}
