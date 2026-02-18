```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->getUsage(
    organizationId: '<ORGANIZATION_ID>',
    startDate: '', // optional
    endDate: '' // optional
);```
