```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;
use Appwrite\Enums\Platform;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->estimationCreateOrganization(
    billingPlan: 'tier-0',
    paymentMethodId: '<PAYMENT_METHOD_ID>', // optional
    invites: [], // optional
    couponId: '<COUPON_ID>', // optional
    platform: Platform::APPWRITE() // optional
);```
