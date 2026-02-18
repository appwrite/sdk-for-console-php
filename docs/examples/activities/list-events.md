```php
<?php

use Appwrite\Client;
use Appwrite\Services\Activities;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$activities = new Activities($client);

$result = $activities->listEvents(
    queries: '' // optional
);```
