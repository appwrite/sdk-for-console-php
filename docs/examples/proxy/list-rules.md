```php
<?php

use Appwrite\Client;
use Appwrite\Services\Proxy;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$proxy = new Proxy($client);

$result = $proxy->listRules(
    queries: [], // optional
    search: '<SEARCH>', // optional
    total: false // optional
);```
