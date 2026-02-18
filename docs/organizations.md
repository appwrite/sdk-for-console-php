# Organizations Service


```http request
GET https://cloud.appwrite.io/v1/organizations
```

** Get a list of all the teams in which the current user is a member. You can use the parameters to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, total, billingPlan, paymentMethodId, backupPaymentMethodId, platform | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/organizations
```

** Create a new organization.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | Organization ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Organization name. Max length: 128 chars. |  |
| billingPlan | string | Organization billing plan chosen |  |
| paymentMethodId | string | Payment method ID. Required for pro plans when trial is not available and user doesn't have default payment method set. |  |
| billingAddressId | string | Unique ID of billing address |  |
| invites | array | Additional member invites | [] |
| couponId | string | Coupon id |  |
| taxId | string | Tax Id associated to billing. |  |
| budget | integer | Budget limit for additional usage set for the organization |  |
| platform | string | Platform type | appwrite |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/estimations/create-organization
```

** Get estimation for creating an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| billingPlan | string | Organization billing plan chosen |  |
| paymentMethodId | string | Payment method ID. Required for pro plans when trial is not available and user doesn't have default payment method set. |  |
| invites | array | Additional member invites | [] |
| couponId | string | Coupon id |  |
| platform | string | Platform type | appwrite |


```http request
DELETE https://cloud.appwrite.io/v1/organizations/{organizationId}
```

** Delete an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Team ID. |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/aggregations
```

** Get a list of all aggregations for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: teamId, aggregationId, from, to | [] |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/aggregations/{aggregationId}
```

** Get a specific aggregation using it&#039;s aggregation ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| aggregationId | string | **Required** Invoice unique ID |  |
| limit | integer | Maximum number of project aggregations to return in response. By default will return maximum 5 results. Maximum of 10 results allowed per request. | 5 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. | 0 |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/billing-address
```

** Set a billing address for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| billingAddressId | string | Unique ID of billing address |  |


```http request
DELETE https://cloud.appwrite.io/v1/organizations/{organizationId}/billing-address
```

** Delete a team&#039;s billing address. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/billing-addresses/{billingAddressId}
```

** Get a billing address using it&#039;s ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| billingAddressId | string | **Required** Unique ID of billing address |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/billing-email
```

** Set the current billing email for the organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| billingEmail | string | Billing email for the organization. |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/budget
```

** Update the budget limit for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| budget | integer | Budget limit for additional usage set for the organization |  |
| alerts | array | Budget alert limit percentage | [75] |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/credits
```

** List all credits for an organization.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: teamId, couponId, credits, expiration, status | [] |


```http request
POST https://cloud.appwrite.io/v1/organizations/{organizationId}/credits
```

** Add credit to an organization using a coupon. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| couponId | string | ID of the coupon |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/credits/available
```

** Get total available valid credits for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/credits/{creditId}
```

** Get credit details. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| creditId | string | **Required** Credit Unique ID |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/estimations/delete-organization
```

** Get estimation for deleting an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Team ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/estimations/update-plan
```

** Get estimation for updating the organization plan. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| billingPlan | string | Organization billing plan chosen |  |
| invites | array | Additional member invites | [] |
| couponId | string | Coupon id |  |


```http request
POST https://cloud.appwrite.io/v1/organizations/{organizationId}/feedbacks/downgrade
```

** Submit feedback about downgrading from a paid plan to a lower tier. This helps the team understand user experience and improve the platform.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| reason | string | Feedback reason |  |
| message | string | Feedback message |  |
| fromPlanId | string | Plan downgrading from |  |
| toPlanId | string | Plan downgrading to |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices
```

** List all invoices for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/databases#querying-documents). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: teamId, aggregationId, amount, currency, from, to, dueAt, attempts, status, grossAmount | [] |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices/{invoiceId}
```

** Get an invoice by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invoiceId | string | **Required** Invoice unique ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices/{invoiceId}/download
```

** Download invoice in PDF **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invoiceId | string | **Required** Invoice unique ID |  |


```http request
POST https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices/{invoiceId}/payments
```

** Initiate payment for failed invoice to pay live from console **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invoiceId | string | **Required** Invoice unique ID |  |
| paymentMethodId | string | Payment method ID |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices/{invoiceId}/status
```

** Validates the payment linked with the invoice and updates the invoice status if the payment status is changed. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invoiceId | string | **Required** Invoice unique ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/invoices/{invoiceId}/view
```

** View invoice in PDF **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invoiceId | string | **Required** Invoice unique ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/keys
```

** Get a list of all API keys from the current organization.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/organizations/{organizationId}/keys
```

** Create a new organization API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/keys/{keyId}
```

** Get a key by its unique ID. This endpoint returns details about a specific API key in your organization including it&#039;s scopes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/organizations/{organizationId}/keys/{keyId}
```

** Update a key by its unique ID. Use this endpoint to update the name, scopes, or expiration time of an API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| keyId | string | **Required** Key unique ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
DELETE https://cloud.appwrite.io/v1/organizations/{organizationId}/keys/{keyId}
```

** Delete a key by its unique ID. Once deleted, the key can no longer be used to authenticate API calls. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/payment-method
```

** Set a organization&#039;s default payment method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| paymentMethodId | string | Unique ID of payment method |  |


```http request
DELETE https://cloud.appwrite.io/v1/organizations/{organizationId}/payment-method
```

** Delete the default payment method for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/payment-method/backup
```

** Set an organization&#039;s backup payment method.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| paymentMethodId | string | Unique ID of payment method |  |


```http request
DELETE https://cloud.appwrite.io/v1/organizations/{organizationId}/payment-method/backup
```

** Delete a backup payment method for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/payment-methods/{paymentMethodId}
```

** Get an organization&#039;s payment method using it&#039;s payment method ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| paymentMethodId | string | **Required** Unique ID of payment method |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/plan
```

** Get the details of the current billing plan for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/plan
```

** Update the billing plan for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |
| billingPlan | string | Organization billing plan chosen |  |
| paymentMethodId | string | Payment method ID. Required for pro plans when trial is not available and user doesn't have default payment method set. |  |
| billingAddressId | string | Unique ID of billing address |  |
| invites | array | Additional member invites | [] |
| couponId | string | Coupon id |  |
| taxId | string | Tax Id associated to billing. |  |
| budget | integer | Budget limit for additional usage set for the organization |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/plan/cancel
```

** Cancel the downgrade initiated for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization Unique ID |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/regions
```

** Get all available regions for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Team ID. |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/roles
```

** Get Scopes **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization id |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/taxId
```

** Set an organization&#039;s billing tax ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| taxId | string | Tax Id associated to billing. |  |


```http request
GET https://cloud.appwrite.io/v1/organizations/{organizationId}/usage
```

** Get the usage data for an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| startDate | string | Starting date for the usage |  |
| endDate | string | End date for the usage |  |


```http request
PATCH https://cloud.appwrite.io/v1/organizations/{organizationId}/validate
```

** Validate payment for team after creation or upgrade. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| organizationId | string | **Required** Organization ID |  |
| invites | array | Additional member invites | [] |

