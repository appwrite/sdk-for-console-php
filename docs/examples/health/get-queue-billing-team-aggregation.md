```php
<?php

use Appwrite\Client;
use Appwrite\Services\Health;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$health = new Health($client);

$result = $health->getQueueBillingTeamAggregation(
    threshold: null // optional
);```
