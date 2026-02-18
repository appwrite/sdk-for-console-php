<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Platform;
use Appwrite\Enums\Scopes;

final class OrganizationsTest extends TestCase {
    private $client;
    private $organizations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->organizations = new Organizations($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "teams" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

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

        $response = $this->organizations->create(
            "<ORGANIZATION_ID>",
            "<NAME>",
            "tier-0"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodEstimationCreateOrganization(): void {

        $data = array(
            "amount" => 50,
            "grossAmount" => 50,
            "discount" => 50,
            "credits" => 50,
            "items" => array(),
            "discounts" => array(),
            "trialDays" => 14);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->estimationCreateOrganization(
            "tier-0"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->delete(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListAggregations(): void {

        $data = array(
            "total" => 5,
            "aggregations" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->listAggregations(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetAggregation(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "from" => "2020-10-15T06:38:00.000+00:00",
            "to" => "2020-10-15T06:38:00.000+00:00",
            "usageStorage" => 20009090,
            "usageTotalStorage" => 20009090,
            "usageFilesStorage" => 20009090,
            "usageDeploymentsStorage" => 20009090,
            "usageBuildsStorage" => 20009090,
            "usageDatabasesStorage" => 2009090,
            "usageUsers" => 2000,
            "usageExecutions" => 2000,
            "usageBandwidth" => 2000,
            "usageRealtime" => 200,
            "additionalMembers" => 5,
            "additionalMemberAmount" => 30,
            "additionalStorageAmount" => 40,
            "additionalUsersAmount" => 4,
            "additionalExecutionsAmount" => 30,
            "additionalBandwidthAmount" => 40,
            "additionalRealtimeAmount" => 20,
            "plan" => "tier-0",
            "amount" => 2,
            "breakdown" => array(),
            "resources" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getAggregation(
            "<ORGANIZATION_ID>",
            "<AGGREGATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSetBillingAddress(): void {

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

        $response = $this->organizations->setBillingAddress(
            "<ORGANIZATION_ID>",
            "<BILLING_ADDRESS_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteBillingAddress(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->deleteBillingAddress(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetBillingAddress(): void {

        $data = array(
            "\$id" => "eu-fr",
            "userId" => "5e5ea5c16897e",
            "streetAddress" => "13th Avenue",
            "addressLine2" => "",
            "country" => "USA",
            "city" => "",
            "state" => "",
            "postalCode" => "");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getBillingAddress(
            "<ORGANIZATION_ID>",
            "<BILLING_ADDRESS_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSetBillingEmail(): void {

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

        $response = $this->organizations->setBillingEmail(
            "<ORGANIZATION_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateBudget(): void {

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

        $response = $this->organizations->updateBudget(
            "<ORGANIZATION_ID>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCredits(): void {

        $data = array(
            "credits" => array(),
            "total" => 5,
            "available" => 5);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->listCredits(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodAddCredit(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "couponId" => "NEWBONUS",
            "userId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "credits" => 50,
            "total" => 50,
            "expiration" => "2020-10-15T06:38:00.000+00:00",
            "status" => "disabled");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->addCredit(
            "<ORGANIZATION_ID>",
            "<COUPON_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetAvailableCredits(): void {

        $data = array(
            "available" => 100);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getAvailableCredits(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCredit(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "couponId" => "NEWBONUS",
            "userId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "credits" => 50,
            "total" => 50,
            "expiration" => "2020-10-15T06:38:00.000+00:00",
            "status" => "disabled");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getCredit(
            "<ORGANIZATION_ID>",
            "<CREDIT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodEstimationDeleteOrganization(): void {

        $data = array(
            "unpaidInvoices" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->estimationDeleteOrganization(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodEstimationUpdatePlan(): void {

        $data = array(
            "amount" => 50,
            "grossAmount" => 50,
            "discount" => 50,
            "credits" => 50,
            "items" => array(),
            "discounts" => array(),
            "trialDays" => 14,
            "organizationCredits" => 0);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->estimationUpdatePlan(
            "<ORGANIZATION_ID>",
            "tier-0"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDowngradeFeedback(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "title" => "I encountered a bug and outage that caused my app to lose its value",
            "message" => "The platform experienced significant downtime which affected my users.",
            "fromPlanId" => "pro",
            "toPlanId" => "free",
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "version" => "1.8.0");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->createDowngradeFeedback(
            "<ORGANIZATION_ID>",
            "<REASON>",
            "<MESSAGE>",
            "<FROM_PLAN_ID>",
            "<TO_PLAN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListInvoices(): void {

        $data = array(
            "total" => 5,
            "invoices" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->listInvoices(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetInvoice(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "teamId" => "5e5ea5c16897e",
            "aggregationId" => "5e5ea5c16897e",
            "plan" => "tier-1",
            "usage" => array(),
            "amount" => 50,
            "tax" => 17,
            "taxAmount" => 12.5,
            "vat" => 17,
            "vatAmount" => 12.5,
            "grossAmount" => 12.5,
            "creditsUsed" => 30,
            "currency" => "USD",
            "clientSecret" => "pi_daslfasdfkla_asdkfl",
            "status" => "succeeded",
            "lastError" => "Your card has insufficient balance.",
            "dueAt" => "2020-10-15T06:38:00.000+00:00",
            "from" => "2020-10-15T06:38:00.000+00:00",
            "to" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getInvoice(
            "<ORGANIZATION_ID>",
            "<INVOICE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetInvoiceDownload(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "providerMethodId" => "abdk3ed3sdkfj",
            "clientSecret" => "seti_ddfe",
            "providerUserId" => "abdk3ed3sdkfj",
            "userId" => "5e5ea5c16897e",
            "expiryMonth" => 2,
            "expiryYear" => 2024,
            "last4" => "4242",
            "brand" => "visa",
            "name" => "John Doe",
            "mandateId" => "yxc",
            "country" => "de",
            "state" => "",
            "lastError" => "Your card has insufficient funds.",
            "default" => true,
            "expired" => true,
            "failed" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getInvoiceDownload(
            "<ORGANIZATION_ID>",
            "<INVOICE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateInvoicePayment(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "teamId" => "5e5ea5c16897e",
            "aggregationId" => "5e5ea5c16897e",
            "plan" => "tier-1",
            "usage" => array(),
            "amount" => 50,
            "tax" => 17,
            "taxAmount" => 12.5,
            "vat" => 17,
            "vatAmount" => 12.5,
            "grossAmount" => 12.5,
            "creditsUsed" => 30,
            "currency" => "USD",
            "clientSecret" => "pi_daslfasdfkla_asdkfl",
            "status" => "succeeded",
            "lastError" => "Your card has insufficient balance.",
            "dueAt" => "2020-10-15T06:38:00.000+00:00",
            "from" => "2020-10-15T06:38:00.000+00:00",
            "to" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->createInvoicePayment(
            "<ORGANIZATION_ID>",
            "<INVOICE_ID>",
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodValidateInvoice(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "teamId" => "5e5ea5c16897e",
            "aggregationId" => "5e5ea5c16897e",
            "plan" => "tier-1",
            "usage" => array(),
            "amount" => 50,
            "tax" => 17,
            "taxAmount" => 12.5,
            "vat" => 17,
            "vatAmount" => 12.5,
            "grossAmount" => 12.5,
            "creditsUsed" => 30,
            "currency" => "USD",
            "clientSecret" => "pi_daslfasdfkla_asdkfl",
            "status" => "succeeded",
            "lastError" => "Your card has insufficient balance.",
            "dueAt" => "2020-10-15T06:38:00.000+00:00",
            "from" => "2020-10-15T06:38:00.000+00:00",
            "to" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->validateInvoice(
            "<ORGANIZATION_ID>",
            "<INVOICE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetInvoiceView(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "providerMethodId" => "abdk3ed3sdkfj",
            "clientSecret" => "seti_ddfe",
            "providerUserId" => "abdk3ed3sdkfj",
            "userId" => "5e5ea5c16897e",
            "expiryMonth" => 2,
            "expiryYear" => 2024,
            "last4" => "4242",
            "brand" => "visa",
            "name" => "John Doe",
            "mandateId" => "yxc",
            "country" => "de",
            "state" => "",
            "lastError" => "Your card has insufficient funds.",
            "default" => true,
            "expired" => true,
            "failed" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getInvoiceView(
            "<ORGANIZATION_ID>",
            "<INVOICE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListKeys(): void {

        $data = array(
            "total" => 5,
            "keys" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->listKeys(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->createKey(
            "<ORGANIZATION_ID>",
            "<NAME>",
            array(Scopes::PLATFORMSREAD())
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getKey(
            "<ORGANIZATION_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->updateKey(
            "<ORGANIZATION_ID>",
            "<KEY_ID>",
            "<NAME>",
            array(Scopes::PLATFORMSREAD())
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteKey(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->deleteKey(
            "<ORGANIZATION_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSetDefaultPaymentMethod(): void {

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

        $response = $this->organizations->setDefaultPaymentMethod(
            "<ORGANIZATION_ID>",
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDefaultPaymentMethod(): void {

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

        $response = $this->organizations->deleteDefaultPaymentMethod(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSetBackupPaymentMethod(): void {

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

        $response = $this->organizations->setBackupPaymentMethod(
            "<ORGANIZATION_ID>",
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteBackupPaymentMethod(): void {

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

        $response = $this->organizations->deleteBackupPaymentMethod(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPaymentMethod(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "providerMethodId" => "abdk3ed3sdkfj",
            "clientSecret" => "seti_ddfe",
            "providerUserId" => "abdk3ed3sdkfj",
            "userId" => "5e5ea5c16897e",
            "expiryMonth" => 2,
            "expiryYear" => 2024,
            "last4" => "4242",
            "brand" => "visa",
            "name" => "John Doe",
            "mandateId" => "yxc",
            "country" => "de",
            "state" => "",
            "lastError" => "Your card has insufficient funds.",
            "default" => true,
            "expired" => true,
            "failed" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getPaymentMethod(
            "<ORGANIZATION_ID>",
            "<PAYMENT_METHOD_ID>"
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

        $response = $this->organizations->getPlan(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePlan(): void {

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

        $response = $this->organizations->updatePlan(
            "<ORGANIZATION_ID>",
            "tier-0"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCancelDowngrade(): void {

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

        $response = $this->organizations->cancelDowngrade(
            "<ORGANIZATION_ID>"
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

        $response = $this->organizations->listRegions(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetScopes(): void {

        $data = array(
            "scopes" => array(),
            "roles" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getScopes(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodSetBillingTaxId(): void {

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

        $response = $this->organizations->setBillingTaxId(
            "<ORGANIZATION_ID>",
            "<TAX_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetUsage(): void {

        $data = array(
            "bandwidth" => array(),
            "users" => array(),
            "executions" => array(),
            "databasesReads" => array(),
            "databasesWrites" => array(),
            "imageTransformations" => array(),
            "imageTransformationsTotal" => 0,
            "screenshotsGenerated" => array(),
            "screenshotsGeneratedTotal" => 0,
            "imagineCredits" => array(),
            "imagineCreditsTotal" => 0,
            "usersTotal" => 0,
            "executionsTotal" => 0,
            "executionsMBSecondsTotal" => 0,
            "buildsMBSecondsTotal" => 0,
            "filesStorageTotal" => 0,
            "buildsStorageTotal" => 0,
            "deploymentsStorageTotal" => 0,
            "databasesStorageTotal" => 0,
            "databasesReadsTotal" => 0,
            "databasesWritesTotal" => 0,
            "backupsStorageTotal" => 0,
            "storageTotal" => 0,
            "authPhoneTotal" => 0,
            "authPhoneEstimate" => 0,
            "projects" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->getUsage(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodValidatePayment(): void {

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

        $response = $this->organizations->validatePayment(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

}
