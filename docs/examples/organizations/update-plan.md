```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->updatePlan(
    organizationId: '<ORGANIZATION_ID>',
    billingPlan: 'tier-0',
    paymentMethodId: '<PAYMENT_METHOD_ID>', // optional
    billingAddressId: '<BILLING_ADDRESS_ID>', // optional
    invites: [], // optional
    couponId: '<COUPON_ID>', // optional
    taxId: '<TAX_ID>', // optional
    budget: 0 // optional
);```
