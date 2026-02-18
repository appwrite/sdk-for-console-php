```php
<?php

use Appwrite\Client;
use Appwrite\Services\Functions;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$functions = new Functions($client);

$result = $functions->listVariables(
    functionId: '<FUNCTION_ID>'
);```
