```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\FirebaseMigrationResource;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$migrations = new Migrations($client);

$result = $migrations->getFirebaseReport(
    resources: [FirebaseMigrationResource::USER()],
    serviceAccount: '<SERVICE_ACCOUNT>'
);```
