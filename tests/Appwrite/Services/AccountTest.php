<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\AuthenticatorType;
use Appwrite\Enums\AuthenticationFactor;
use Appwrite\Enums\OAuthProvider;

final class AccountTest extends TestCase {
    private $client;
    private $account;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->account = new Account($this->client);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->get(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->create(
            "<USER_ID>",
            "email@example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->delete(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListBillingAddresses(): void {

        $data = array(
            "total" => 5,
            "billingAddresses" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listBillingAddresses(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBillingAddress(): void {

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

        $response = $this->account->createBillingAddress(
            "<COUNTRY>",
            "<CITY>",
            "<STREET_ADDRESS>"
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

        $response = $this->account->getBillingAddress(
            "<BILLING_ADDRESS_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateBillingAddress(): void {

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

        $response = $this->account->updateBillingAddress(
            "<BILLING_ADDRESS_ID>",
            "<COUNTRY>",
            "<CITY>",
            "<STREET_ADDRESS>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteBillingAddress(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteBillingAddress(
            "<BILLING_ADDRESS_ID>"
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

        $response = $this->account->getCoupon(
            "<COUPON_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmail(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateEmail(
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListIdentities(): void {

        $data = array(
            "total" => 5,
            "identities" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listIdentities(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteIdentity(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteIdentity(
            "<IDENTITY_ID>"
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

        $response = $this->account->listInvoices(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateJWT(): void {

        $data = array(
            "jwt" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createJWT(
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

        $response = $this->account->listKeys(
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

        $response = $this->account->createKey(
            "<NAME>",
            array(Scopes::ACCOUNT())
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

        $response = $this->account->getKey(
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

        $response = $this->account->updateKey(
            "<KEY_ID>",
            "<NAME>",
            array(Scopes::ACCOUNT())
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteKey(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteKey(
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListLogs(): void {

        $data = array(
            "total" => 5,
            "logs" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listLogs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMFA(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMFA(
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMFAAuthenticator(): void {

        $data = array(
            "secret" => "1",
            "uri" => "1");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMFAAuthenticator(
            AuthenticatorType::TOTP()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMFAAuthenticator(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMFAAuthenticator(
            AuthenticatorType::TOTP(),
            "<OTP>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteMFAAuthenticator(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteMFAAuthenticator(
            AuthenticatorType::TOTP()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMFAChallenge(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "expire" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMFAChallenge(
            AuthenticationFactor::EMAIL()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMFAChallenge(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMFAChallenge(
            "<CHALLENGE_ID>",
            "<OTP>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListMFAFactors(): void {

        $data = array(
            "totp" => true,
            "phone" => true,
            "email" => true,
            "recoveryCode" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listMFAFactors(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetMFARecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getMFARecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMFARecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMFARecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMFARecoveryCodes(): void {

        $data = array(
            "recoveryCodes" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMFARecoveryCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateName(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateName(
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePassword(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePassword(
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListPaymentMethods(): void {

        $data = array(
            "total" => 5,
            "paymentMethods" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listPaymentMethods(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePaymentMethod(): void {

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

        $response = $this->account->createPaymentMethod(
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

        $response = $this->account->getPaymentMethod(
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePaymentMethod(): void {

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

        $response = $this->account->updatePaymentMethod(
            "<PAYMENT_METHOD_ID>",
            1,
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeletePaymentMethod(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deletePaymentMethod(
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePaymentMethodProvider(): void {

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

        $response = $this->account->updatePaymentMethodProvider(
            "<PAYMENT_METHOD_ID>",
            "<PROVIDER_METHOD_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePaymentMethodMandateOptions(): void {

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

        $response = $this->account->updatePaymentMethodMandateOptions(
            "<PAYMENT_METHOD_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhone(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhone(
            "+12065550100",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPrefs(): void {

        $data = array();

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getPrefs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePrefs(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePrefs(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRecovery(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createRecovery(
            "email@example.com",
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRecovery(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateRecovery(
            "<USER_ID>",
            "<SECRET>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSessions(): void {

        $data = array(
            "total" => 5,
            "sessions" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->listSessions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSessions(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteSessions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateAnonymousSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createAnonymousSession(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailPasswordSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createEmailPasswordSession(
            "email@example.com",
            "password"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMagicURLSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateMagicURLSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateOAuth2Session(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createOAuth2Session(
            OAuthProvider::AMAZON()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhoneSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhoneSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createSession(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->getSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSession(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5bb8c16897e",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "provider" => "email",
            "providerUid" => "user@example.com",
            "providerAccessToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "providerAccessTokenExpiry" => "2020-10-15T06:38:00.000+00:00",
            "providerRefreshToken" => "MTQ0NjJkZmQ5OTM2NDE1ZTZjNGZmZjI3",
            "ip" => "127.0.0.1",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States",
            "current" => true,
            "factors" => array(),
            "secret" => "5e5bb8c16897e",
            "mfaUpdatedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSession(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deleteSession(
            "<SESSION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => array(),
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => array(),
            "targets" => array(),
            "accessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateStatus(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePushTarget(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Apple iPhone 12",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",
            "expired" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createPushTarget(
            "<TARGET_ID>",
            "<IDENTIFIER>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePushTarget(): void {

        $data = array(
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Apple iPhone 12",
            "userId" => "259125845563242502",
            "providerType" => "email",
            "identifier" => "token",
            "expired" => true);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePushTarget(
            "<TARGET_ID>",
            "<IDENTIFIER>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeletePushTarget(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->deletePushTarget(
            "<TARGET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createEmailToken(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMagicURLToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createMagicURLToken(
            "<USER_ID>",
            "email@example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateOAuth2Token(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createOAuth2Token(
            OAuthProvider::AMAZON()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePhoneToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createPhoneToken(
            "<USER_ID>",
            "+12065550100"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateEmailVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createEmailVerification(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createVerification(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmailVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateEmailVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updateVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePhoneVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->createPhoneVerification(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePhoneVerification(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c168bb8",
            "secret" => "",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "phrase" => "Golden Fox");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->account->updatePhoneVerification(
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

}
