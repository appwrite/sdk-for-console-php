```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\Resources;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$migrations = new Migrations($client);

$result = $migrations->getFirebaseReport(
    resources: [Resources::USER()],
    serviceAccount: '<SERVICE_ACCOUNT>'
);```
