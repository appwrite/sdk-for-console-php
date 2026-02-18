```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;
use Appwrite\Enums\Platform;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->create(
    organizationId: '<ORGANIZATION_ID>',
    name: '<NAME>',
    billingPlan: 'tier-0',
    paymentMethodId: '<PAYMENT_METHOD_ID>', // optional
    billingAddressId: '<BILLING_ADDRESS_ID>', // optional
    invites: [], // optional
    couponId: '<COUPON_ID>', // optional
    taxId: '<TAX_ID>', // optional
    budget: 0, // optional
    platform: Platform::APPWRITE() // optional
);```
