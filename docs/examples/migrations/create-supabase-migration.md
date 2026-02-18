```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;
use Appwrite\Enums\Resources;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$migrations = new Migrations($client);

$result = $migrations->createSupabaseMigration(
    resources: [Resources::USER()],
    endpoint: 'https://example.com',
    apiKey: '<API_KEY>',
    databaseHost: '<DATABASE_HOST>',
    username: '<USERNAME>',
    password: '<PASSWORD>',
    port: null // optional
);```
