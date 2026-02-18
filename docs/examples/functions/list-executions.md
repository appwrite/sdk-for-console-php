```php
<?php

use Appwrite\Client;
use Appwrite\Services\Functions;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$functions = new Functions($client);

$result = $functions->listExecutions(
    functionId: '<FUNCTION_ID>',
    queries: [], // optional
    total: false // optional
);```
