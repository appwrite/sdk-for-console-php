```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->setBillingAddress(
    organizationId: '<ORGANIZATION_ID>',
    billingAddressId: '<BILLING_ADDRESS_ID>'
);```
