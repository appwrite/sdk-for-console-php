```php
<?php

use Appwrite\Client;
use Appwrite\Services\Migrations;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$migrations = new Migrations($client);

$result = $migrations->retry(
    migrationId: '<MIGRATION_ID>'
);```
