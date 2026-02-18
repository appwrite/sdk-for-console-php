```php
<?php

use Appwrite\Client;
use Appwrite\Services\Functions;
use Appwrite\Enums\Runtimes;
use Appwrite\Enums\UseCases;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$functions = new Functions($client);

$result = $functions->listTemplates(
    runtimes: [Runtimes::NODE145()], // optional
    useCases: [UseCases::STARTER()], // optional
    limit: 1, // optional
    offset: 0, // optional
    total: false // optional
);```
