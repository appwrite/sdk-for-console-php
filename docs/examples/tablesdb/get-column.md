```php
<?php

use Appwrite\Client;
use Appwrite\Services\TablesDB;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$tablesDB = new TablesDB($client);

$result = $tablesDB->getColumn(
    databaseId: '<DATABASE_ID>',
    tableId: '<TABLE_ID>',
    key: ''
);```
