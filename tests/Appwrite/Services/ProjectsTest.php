<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Region;
use Appwrite\Enums\Api;
use Appwrite\Enums\AuthMethod;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\OAuthProvider;
use Appwrite\Enums\PlatformType;
use Appwrite\Enums\ResourceType;
use Appwrite\Enums\ApiService;
use Appwrite\Enums\SMTPSecure;
use Appwrite\Enums\Status;
use Appwrite\Enums\EmailTemplateType;
use Appwrite\Enums\EmailTemplateLocale;
use Appwrite\Enums\SmsTemplateType;
use Appwrite\Enums\SmsTemplateLocale;

final class ProjectsTest extends TestCase {
    private $client;
    private $projects;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->projects = new Projects($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "projects" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->create(
            "",
            "<NAME>",
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->get(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->update(
            "<PROJECT_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->delete(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAPIStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAPIStatus(
            "<PROJECT_ID>",
            Api::REST(),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAPIStatusAll(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAPIStatusAll(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthDuration(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthDuration(
            "<PROJECT_ID>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthLimit(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthLimit(
            "<PROJECT_ID>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthSessionsLimit(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthSessionsLimit(
            "<PROJECT_ID>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMembershipsPrivacy(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateMembershipsPrivacy(
            "<PROJECT_ID>",
            true,
            true,
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMockNumbers(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateMockNumbers(
            "<PROJECT_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthPasswordDictionary(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthPasswordDictionary(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthPasswordHistory(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthPasswordHistory(
            "<PROJECT_ID>",
            1
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePersonalDataCheck(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updatePersonalDataCheck(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSessionAlerts(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateSessionAlerts(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSessionInvalidation(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateSessionInvalidation(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateAuthStatus(
            "<PROJECT_ID>",
            AuthMethod::EMAILPASSWORD(),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateConsoleAccess(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateConsoleAccess(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListDevKeys(): void {

        $data = array(
            "total" => 5,
            "devKeys" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->listDevKeys(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDevKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Dev API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createDevKey(
            "<PROJECT_ID>",
            "<NAME>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDevKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Dev API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getDevKey(
            "<PROJECT_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDevKey(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Dev API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateDevKey(
            "<PROJECT_ID>",
            "<KEY_ID>",
            "<NAME>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDevKey(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deleteDevKey(
            "<PROJECT_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateJWT(): void {

        $data = array(
            "jwt" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createJWT(
            "<PROJECT_ID>",
            array(Scopes::SESSIONSWRITE())
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

        $response = $this->projects->listKeys(
            "<PROJECT_ID>"
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

        $response = $this->projects->createKey(
            "<PROJECT_ID>",
            "<NAME>",
            array(Scopes::SESSIONSWRITE())
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

        $response = $this->projects->getKey(
            "<PROJECT_ID>",
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

        $response = $this->projects->updateKey(
            "<PROJECT_ID>",
            "<KEY_ID>",
            "<NAME>",
            array(Scopes::SESSIONSWRITE())
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteKey(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deleteKey(
            "<PROJECT_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateLabels(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateLabels(
            "<PROJECT_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateOAuth2(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateOAuth2(
            "<PROJECT_ID>",
            OAuthProvider::AMAZON()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListPlatforms(): void {

        $data = array(
            "total" => 5,
            "platforms" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->listPlatforms(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreatePlatform(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "web",
            "key" => "com.company.appname",
            "store" => "",
            "hostname" => "app.example.com",
            "httpUser" => "username",
            "httpPass" => "password");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createPlatform(
            "<PROJECT_ID>",
            PlatformType::WEB(),
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPlatform(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "web",
            "key" => "com.company.appname",
            "store" => "",
            "hostname" => "app.example.com",
            "httpUser" => "username",
            "httpPass" => "password");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getPlatform(
            "<PROJECT_ID>",
            "<PLATFORM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePlatform(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "web",
            "key" => "com.company.appname",
            "store" => "",
            "hostname" => "app.example.com",
            "httpUser" => "username",
            "httpPass" => "password");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updatePlatform(
            "<PROJECT_ID>",
            "<PLATFORM_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeletePlatform(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deletePlatform(
            "<PROJECT_ID>",
            "<PLATFORM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSchedules(): void {

        $data = array(
            "total" => 5,
            "schedules" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->listSchedules(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSchedule(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceType" => "function",
            "resourceId" => "5e5ea5c16897e",
            "resourceUpdatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "schedule" => "5 4 * * *",
            "data" => array(),
            "active" => true,
            "region" => "fra");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createSchedule(
            "<PROJECT_ID>",
            ResourceType::FUNCTION(),
            "<RESOURCE_ID>",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSchedule(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceType" => "function",
            "resourceId" => "5e5ea5c16897e",
            "resourceUpdatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "schedule" => "5 4 * * *",
            "data" => array(),
            "active" => true,
            "region" => "fra");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getSchedule(
            "<PROJECT_ID>",
            "<SCHEDULE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateServiceStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateServiceStatus(
            "<PROJECT_ID>",
            ApiService::ACCOUNT(),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateServiceStatusAll(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateServiceStatusAll(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSMTP(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateSMTP(
            "<PROJECT_ID>",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateSMTPTest(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createSMTPTest(
            "<PROJECT_ID>",
            array(),
            "<SENDER_NAME>",
            "email@example.com",
            ""
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateStatus(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateStatus(
            "<PROJECT_ID>",
            Status::ACTIVE()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTeam(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authMockNumbers" => array(),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(),
            "platforms" => array(),
            "webhooks" => array(),
            "keys" => array(),
            "devKeys" => array(),
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMessaging" => true,
            "region" => "fra",
            "billingLimits" => array(),
            "blocks" => array(),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateTeam(
            "<PROJECT_ID>",
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetEmailTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyTo" => "emails@appwrite.io",
            "subject" => "Please verify your email address");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getEmailTemplate(
            "<PROJECT_ID>",
            EmailTemplateType::VERIFICATION(),
            EmailTemplateLocale::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateEmailTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyTo" => "emails@appwrite.io",
            "subject" => "Please verify your email address");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateEmailTemplate(
            "<PROJECT_ID>",
            EmailTemplateType::VERIFICATION(),
            EmailTemplateLocale::AF(),
            "<SUBJECT>",
            "<MESSAGE>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteEmailTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyTo" => "emails@appwrite.io",
            "subject" => "Please verify your email address");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deleteEmailTemplate(
            "<PROJECT_ID>",
            EmailTemplateType::VERIFICATION(),
            EmailTemplateLocale::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetSMSTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getSMSTemplate(
            "<PROJECT_ID>",
            SmsTemplateType::VERIFICATION(),
            SmsTemplateLocale::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSMSTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateSMSTemplate(
            "<PROJECT_ID>",
            SmsTemplateType::VERIFICATION(),
            SmsTemplateLocale::AF(),
            "<MESSAGE>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteSMSTemplate(): void {

        $data = array(
            "type" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deleteSMSTemplate(
            "<PROJECT_ID>",
            SmsTemplateType::VERIFICATION(),
            SmsTemplateLocale::AF()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListWebhooks(): void {

        $data = array(
            "total" => 5,
            "webhooks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->listWebhooks(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateWebhook(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->createWebhook(
            "<PROJECT_ID>",
            "<NAME>",
            array(),
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetWebhook(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->getWebhook(
            "<PROJECT_ID>",
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateWebhook(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateWebhook(
            "<PROJECT_ID>",
            "<WEBHOOK_ID>",
            "<NAME>",
            array(),
            "",
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteWebhook(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->deleteWebhook(
            "<PROJECT_ID>",
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateWebhookSignature(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->projects->updateWebhookSignature(
            "<PROJECT_ID>",
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

}
