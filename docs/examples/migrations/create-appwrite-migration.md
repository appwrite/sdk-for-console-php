```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\AppwriteMigrationResource;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$migrations = new Migrations($client);

$result = $migrations->createAppwriteMigration(
    resources: [AppwriteMigrationResource::USER()],
    endpoint: 'https://example.com',
    projectId: '<PROJECT_ID>',
    apiKey: '<API_KEY>'
);```
