```php
<?php

use Appwrite\Client;
use Appwrite\Services\Sites;
use Appwrite\Enums\Frameworks;
use Appwrite\Enums\UseCases;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$sites = new Sites($client);

$result = $sites->listTemplates(
    frameworks: [Frameworks::ANALOG()], // optional
    useCases: [UseCases::PORTFOLIO()], // optional
    limit: 1, // optional
    offset: 0 // optional
);```
