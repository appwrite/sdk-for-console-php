```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->createDowngradeFeedback(
    organizationId: '<ORGANIZATION_ID>',
    reason: '<REASON>',
    message: '<MESSAGE>',
    fromPlanId: '<FROM_PLAN_ID>',
    toPlanId: '<TO_PLAN_ID>'
);```
