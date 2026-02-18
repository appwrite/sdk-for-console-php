```php
<?php

use Appwrite\Client;
use Appwrite\Services\Console;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$console = new Console($client);

$result = $console->suggestIndexes(
    databaseId: '<DATABASE_ID>',
    tableId: '<TABLE_ID>',
    min: 1, // optional
    max: 1 // optional
);```
