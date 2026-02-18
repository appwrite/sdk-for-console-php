<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Platform;
use Appwrite\Enums\ConsoleResourceType;

final class ConsoleTest extends TestCase {
    private $client;
    private $console;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->console = new Console($this->client);
    }

    public function testMethodGetCampaign(): void {

        $data = array(
            "\$id" => "",
            "template" => "",
            "title" => "",
            "description" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getCampaign(
            "<CAMPAIGN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCoupon(): void {

        $data = array(
            "\$id" => "NEWBONUS",
            "code" => "NEWBONUS",
            "credits" => 50,
            "expiration" => "2020-10-15T06:38:00.000+00:00",
            "validity" => 180,
            "campaign" => "AppwriteHeroes",
            "status" => "disabled",
            "onlyNewOrgs" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getCoupon(
            "<COUPON_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPlans(): void {

        $data = array(
            "total" => 5,
            "plans" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getPlans(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPlan(): void {

        $data = array(
            "\$id" => "tier-0",
            "name" => "Hobby",
            "desc" => "Hobby plan",
            "order" => 0,
            "price" => 25,
            "trial" => 14,
            "bandwidth" => 25,
            "storage" => 25,
            "imageTransformations" => 100,
            "screenshotsGenerated" => 50,
            "members" => 25,
            "webhooks" => 25,
            "projects" => 2,
            "platforms" => 3,
            "users" => 25,
            "teams" => 25,
            "databases" => 25,
            "databasesReads" => 500000,
            "databasesWrites" => 250000,
            "databasesBatchSize" => 100,
            "buckets" => 25,
            "fileSize" => 25,
            "functions" => 25,
            "sites" => 1,
            "executions" => 25,
            "executionsRetentionCount" => 10000,
            "GBHours" => 100,
            "realtime" => 25,
            "messages" => 1000,
            "topics" => 1,
            "authPhone" => 10,
            "domains" => 5,
            "logs" => 25,
            "alertLimit" => 80,
            "usage" => array(),
            "addons" => array(),
            "budgetCapEnabled" => true,
            "customSmtp" => true,
            "emailBranding" => true,
            "requiresPaymentMethod" => true,
            "requiresBillingAddress" => true,
            "isAvailable" => true,
            "selfService" => true,
            "premiumSupport" => true,
            "budgeting" => true,
            "supportsMockNumbers" => true,
            "supportsOrganizationRoles" => true,
            "supportsCredits" => true,
            "backupsEnabled" => true,
            "usagePerProject" => true,
            "backupPolicies" => 1,
            "deploymentSize" => 30,
            "buildSize" => 2000,
            "databasesAllowEncrypt" => true,
            "group" => "pro");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getPlan(
            "<PLAN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetProgram(): void {

        $data = array(
            "\$id" => "",
            "title" => "",
            "description" => "",
            "tag" => "
Deprecated: str_replace(): Passing null to parameter #3 ($subject) of type array|string is deprecated in /usr/src/code/vendor/appwrite/sdk-generator/src/SDK/SDK.php on line 176
",
            "icon" => "
Deprecated: str_replace(): Passing null to parameter #3 ($subject) of type array|string is deprecated in /usr/src/code/vendor/appwrite/sdk-generator/src/SDK/SDK.php on line 176
",
            "url" => "",
            "active" => true,
            "external" => true,
            "billingPlanId" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->getProgram(
            "<PROGRAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateProgramMembership(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),
            "billingBudget" => 50,
            "budgetAlerts" => array(),
            "billingPlan" => "tier-1",
            "billingPlanId" => "tier-1",
            "billingPlanDetails" => array(),
            "billingEmail" => "billing@org.example",
            "billingStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingCurrentInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingNextInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialDays" => 14,
            "billingAggregationId" => "adbc3de4rddfsd",
            "billingInvoiceId" => "adbc3de4rddfsd",
            "paymentMethodId" => "adbc3de4rddfsd",
            "billingAddressId" => "adbc3de4rddfsd",
            "backupPaymentMethodId" => "adbc3de4rddfsd",
            "status" => "active",
            "remarks" => "Pending initial payment",
            "agreementBAA" => "",
            "programManagerName" => "",
            "programManagerCalendar" => "",
            "programDiscordChannelName" => "",
            "programDiscordChannelUrl" => "",
            "billingLimits" => array(),
            "billingPlanDowngrade" => "tier-1",
            "billingTaxId" => "",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->createProgramMembership(
            "<PROGRAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRegions(): void {

        $data = array(
            "total" => 5,
            "regions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->listRegions(
        );

        $this->assertSame($data, $response);
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

    public function testMethodCreateSource(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->createSource(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuggestColumns(): void {

        $data = array(
            "total" => 5,
            "columns" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->suggestColumns(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSuggestIndexes(): void {

        $data = array(
            "total" => 5,
            "indexes" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->console->suggestIndexes(
            "<DATABASE_ID>",
            "<TABLE_ID>"
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
