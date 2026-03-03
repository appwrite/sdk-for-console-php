<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\Platform;
use Appwrite\Enums\Scopes;

class Organizations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all the teams in which the current user is a member. You can
     * use the parameters to filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/organizations'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new organization.
     * 
     *
     * @param string $organizationId
     * @param string $name
     * @param string $billingPlan
     * @param ?string $paymentMethodId
     * @param ?string $billingAddressId
     * @param ?array $invites
     * @param ?string $couponId
     * @param ?string $taxId
     * @param ?int $budget
     * @param ?Platform $platform
     * @throws AppwriteException
     * @return array
     */
    public function create(string $organizationId, string $name, string $billingPlan, ?string $paymentMethodId = null, ?string $billingAddressId = null, ?array $invites = null, ?string $couponId = null, ?string $taxId = null, ?int $budget = null, ?Platform $platform = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/organizations'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['name'] = $name;
        $apiParams['billingPlan'] = $billingPlan;
        $apiParams['paymentMethodId'] = $paymentMethodId;
        $apiParams['billingAddressId'] = $billingAddressId;

        if (!is_null($invites)) {
            $apiParams['invites'] = $invites;
        }
        $apiParams['couponId'] = $couponId;
        $apiParams['taxId'] = $taxId;
        $apiParams['budget'] = $budget;

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get estimation for creating an organization.
     *
     * @param string $billingPlan
     * @param ?string $paymentMethodId
     * @param ?array $invites
     * @param ?string $couponId
     * @param ?Platform $platform
     * @throws AppwriteException
     * @return array
     */
    public function estimationCreateOrganization(string $billingPlan, ?string $paymentMethodId = null, ?array $invites = null, ?string $couponId = null, ?Platform $platform = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/organizations/estimations/create-organization'
        );

        $apiParams = [];
        $apiParams['billingPlan'] = $billingPlan;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        if (!is_null($invites)) {
            $apiParams['invites'] = $invites;
        }
        $apiParams['couponId'] = $couponId;

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return string
     */
    public function delete(string $organizationId): string
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all aggregations for an organization.
     *
     * @param string $organizationId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listAggregations(string $organizationId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/aggregations'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a specific aggregation using it's aggregation ID.
     *
     * @param string $organizationId
     * @param string $aggregationId
     * @param ?int $limit
     * @param ?int $offset
     * @throws AppwriteException
     * @return array
     */
    public function getAggregation(string $organizationId, string $aggregationId, ?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{aggregationId}'],
            [$organizationId, $aggregationId],
            '/organizations/{organizationId}/aggregations/{aggregationId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['aggregationId'] = $aggregationId;

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Set a billing address for an organization.
     *
     * @param string $organizationId
     * @param string $billingAddressId
     * @throws AppwriteException
     * @return array
     */
    public function setBillingAddress(string $organizationId, string $billingAddressId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/billing-address'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['billingAddressId'] = $billingAddressId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a team's billing address.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return string
     */
    public function deleteBillingAddress(string $organizationId): string
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/billing-address'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a billing address using it's ID.
     *
     * @param string $organizationId
     * @param string $billingAddressId
     * @throws AppwriteException
     * @return array
     */
    public function getBillingAddress(string $organizationId, string $billingAddressId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{billingAddressId}'],
            [$organizationId, $billingAddressId],
            '/organizations/{organizationId}/billing-addresses/{billingAddressId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['billingAddressId'] = $billingAddressId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Set the current billing email for the organization.
     *
     * @param string $organizationId
     * @param string $billingEmail
     * @throws AppwriteException
     * @return array
     */
    public function setBillingEmail(string $organizationId, string $billingEmail): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/billing-email'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['billingEmail'] = $billingEmail;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the budget limit for an organization.
     *
     * @param string $organizationId
     * @param ?int $budget
     * @param ?array $alerts
     * @throws AppwriteException
     * @return array
     */
    public function updateBudget(string $organizationId, ?int $budget, ?array $alerts = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/budget'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['budget'] = $budget;

        if (!is_null($alerts)) {
            $apiParams['alerts'] = $alerts;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List all credits for an organization.
     * 
     *
     * @param string $organizationId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listCredits(string $organizationId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/credits'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Add credit to an organization using a coupon.
     *
     * @param string $organizationId
     * @param string $couponId
     * @throws AppwriteException
     * @return array
     */
    public function addCredit(string $organizationId, string $couponId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/credits'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['couponId'] = $couponId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get total available valid credits for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function getAvailableCredits(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/credits/available'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get credit details.
     *
     * @param string $organizationId
     * @param string $creditId
     * @throws AppwriteException
     * @return array
     */
    public function getCredit(string $organizationId, string $creditId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{creditId}'],
            [$organizationId, $creditId],
            '/organizations/{organizationId}/credits/{creditId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['creditId'] = $creditId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get estimation for deleting an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function estimationDeleteOrganization(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/estimations/delete-organization'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get estimation for updating the organization plan.
     *
     * @param string $organizationId
     * @param string $billingPlan
     * @param ?array $invites
     * @param ?string $couponId
     * @throws AppwriteException
     * @return array
     */
    public function estimationUpdatePlan(string $organizationId, string $billingPlan, ?array $invites = null, ?string $couponId = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/estimations/update-plan'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['billingPlan'] = $billingPlan;

        if (!is_null($invites)) {
            $apiParams['invites'] = $invites;
        }
        $apiParams['couponId'] = $couponId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Submit feedback about downgrading from a paid plan to a lower tier. This
     * helps the team understand user experience and improve the platform.
     * 
     *
     * @param string $organizationId
     * @param string $reason
     * @param string $message
     * @param string $fromPlanId
     * @param string $toPlanId
     * @throws AppwriteException
     * @return array
     */
    public function createDowngradeFeedback(string $organizationId, string $reason, string $message, string $fromPlanId, string $toPlanId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/feedbacks/downgrade'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['reason'] = $reason;
        $apiParams['message'] = $message;
        $apiParams['fromPlanId'] = $fromPlanId;
        $apiParams['toPlanId'] = $toPlanId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List all invoices for an organization.
     *
     * @param string $organizationId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listInvoices(string $organizationId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/invoices'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get an invoice by its unique ID.
     *
     * @param string $organizationId
     * @param string $invoiceId
     * @throws AppwriteException
     * @return array
     */
    public function getInvoice(string $organizationId, string $invoiceId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{invoiceId}'],
            [$organizationId, $invoiceId],
            '/organizations/{organizationId}/invoices/{invoiceId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['invoiceId'] = $invoiceId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Download invoice in PDF
     *
     * @param string $organizationId
     * @param string $invoiceId
     * @throws AppwriteException
     * @return array
     */
    public function getInvoiceDownload(string $organizationId, string $invoiceId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{invoiceId}'],
            [$organizationId, $invoiceId],
            '/organizations/{organizationId}/invoices/{invoiceId}/download'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['invoiceId'] = $invoiceId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Initiate payment for failed invoice to pay live from console
     *
     * @param string $organizationId
     * @param string $invoiceId
     * @param string $paymentMethodId
     * @throws AppwriteException
     * @return array
     */
    public function createInvoicePayment(string $organizationId, string $invoiceId, string $paymentMethodId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{invoiceId}'],
            [$organizationId, $invoiceId],
            '/organizations/{organizationId}/invoices/{invoiceId}/payments'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['invoiceId'] = $invoiceId;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Validates the payment linked with the invoice and updates the invoice
     * status if the payment status is changed.
     *
     * @param string $organizationId
     * @param string $invoiceId
     * @throws AppwriteException
     * @return array
     */
    public function validateInvoice(string $organizationId, string $invoiceId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{invoiceId}'],
            [$organizationId, $invoiceId],
            '/organizations/{organizationId}/invoices/{invoiceId}/status'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['invoiceId'] = $invoiceId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * View invoice in PDF
     *
     * @param string $organizationId
     * @param string $invoiceId
     * @throws AppwriteException
     * @return array
     */
    public function getInvoiceView(string $organizationId, string $invoiceId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{invoiceId}'],
            [$organizationId, $invoiceId],
            '/organizations/{organizationId}/invoices/{invoiceId}/view'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['invoiceId'] = $invoiceId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all API keys from the current organization. 
     *
     * @param string $organizationId
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listKeys(string $organizationId, ?bool $total = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/keys'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new organization API key.
     *
     * @param string $organizationId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function createKey(string $organizationId, string $name, array $scopes, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/keys'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a key by its unique ID. This endpoint returns details about a specific
     * API key in your organization including it's scopes.
     *
     * @param string $organizationId
     * @param string $keyId
     * @throws AppwriteException
     * @return array
     */
    public function getKey(string $organizationId, string $keyId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{keyId}'],
            [$organizationId, $keyId],
            '/organizations/{organizationId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a key by its unique ID. Use this endpoint to update the name,
     * scopes, or expiration time of an API key.
     *
     * @param string $organizationId
     * @param string $keyId
     * @param string $name
     * @param array $scopes
     * @param ?string $expire
     * @throws AppwriteException
     * @return array
     */
    public function updateKey(string $organizationId, string $keyId, string $name, array $scopes, ?string $expire = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{keyId}'],
            [$organizationId, $keyId],
            '/organizations/{organizationId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['keyId'] = $keyId;
        $apiParams['name'] = $name;
        $apiParams['scopes'] = $scopes;
        $apiParams['expire'] = $expire;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a key by its unique ID. Once deleted, the key can no longer be used
     * to authenticate API calls.
     *
     * @param string $organizationId
     * @param string $keyId
     * @throws AppwriteException
     * @return string
     */
    public function deleteKey(string $organizationId, string $keyId): string
    {
        $apiPath = str_replace(
            ['{organizationId}', '{keyId}'],
            [$organizationId, $keyId],
            '/organizations/{organizationId}/keys/{keyId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['keyId'] = $keyId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Set a organization's default payment method.
     *
     * @param string $organizationId
     * @param string $paymentMethodId
     * @throws AppwriteException
     * @return array
     */
    public function setDefaultPaymentMethod(string $organizationId, string $paymentMethodId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/payment-method'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete the default payment method for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function deleteDefaultPaymentMethod(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/payment-method'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Set an organization's backup payment method.
     * 
     *
     * @param string $organizationId
     * @param string $paymentMethodId
     * @throws AppwriteException
     * @return array
     */
    public function setBackupPaymentMethod(string $organizationId, string $paymentMethodId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/payment-method/backup'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a backup payment method for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function deleteBackupPaymentMethod(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/payment-method/backup'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get an organization's payment method using it's payment method ID.
     *
     * @param string $organizationId
     * @param string $paymentMethodId
     * @throws AppwriteException
     * @return array
     */
    public function getPaymentMethod(string $organizationId, string $paymentMethodId): array
    {
        $apiPath = str_replace(
            ['{organizationId}', '{paymentMethodId}'],
            [$organizationId, $paymentMethodId],
            '/organizations/{organizationId}/payment-methods/{paymentMethodId}'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the details of the current billing plan for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function getPlan(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/plan'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update the billing plan for an organization.
     *
     * @param string $organizationId
     * @param string $billingPlan
     * @param ?string $paymentMethodId
     * @param ?string $billingAddressId
     * @param ?array $invites
     * @param ?string $couponId
     * @param ?string $taxId
     * @param ?int $budget
     * @throws AppwriteException
     * @return array
     */
    public function updatePlan(string $organizationId, string $billingPlan, ?string $paymentMethodId = null, ?string $billingAddressId = null, ?array $invites = null, ?string $couponId = null, ?string $taxId = null, ?int $budget = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/plan'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['billingPlan'] = $billingPlan;
        $apiParams['paymentMethodId'] = $paymentMethodId;

        if (!is_null($billingAddressId)) {
            $apiParams['billingAddressId'] = $billingAddressId;
        }

        if (!is_null($invites)) {
            $apiParams['invites'] = $invites;
        }
        $apiParams['couponId'] = $couponId;
        $apiParams['taxId'] = $taxId;
        $apiParams['budget'] = $budget;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Cancel the downgrade initiated for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function cancelDowngrade(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/plan/cancel'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get all available regions for an organization.
     *
     * @param string $organizationId
     * @throws AppwriteException
     * @return array
     */
    public function listRegions(string $organizationId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/regions'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get Scopes
     *
     * @param string $organizationId
     * @param ?string $projectId
     * @throws AppwriteException
     * @return array
     */
    public function getScopes(string $organizationId, ?string $projectId = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/roles'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($projectId)) {
            $apiParams['projectId'] = $projectId;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Set an organization's billing tax ID.
     *
     * @param string $organizationId
     * @param string $taxId
     * @throws AppwriteException
     * @return array
     */
    public function setBillingTaxId(string $organizationId, string $taxId): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/taxId'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;
        $apiParams['taxId'] = $taxId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the usage data for an organization.
     *
     * @param string $organizationId
     * @param ?string $startDate
     * @param ?string $endDate
     * @throws AppwriteException
     * @return array
     */
    public function getUsage(string $organizationId, ?string $startDate = null, ?string $endDate = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/usage'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($startDate)) {
            $apiParams['startDate'] = $startDate;
        }

        if (!is_null($endDate)) {
            $apiParams['endDate'] = $endDate;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Validate payment for team after creation or upgrade.
     *
     * @param string $organizationId
     * @param ?array $invites
     * @throws AppwriteException
     * @return array
     */
    public function validatePayment(string $organizationId, ?array $invites = null): array
    {
        $apiPath = str_replace(
            ['{organizationId}'],
            [$organizationId],
            '/organizations/{organizationId}/validate'
        );

        $apiParams = [];
        $apiParams['organizationId'] = $organizationId;

        if (!is_null($invites)) {
            $apiParams['invites'] = $invites;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}