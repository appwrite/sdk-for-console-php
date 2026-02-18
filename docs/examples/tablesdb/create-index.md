```php
<?php

use Appwrite\Client;
use Appwrite\Services\TablesDB;
use Appwrite\Enums\IndexType;
use Appwrite\Enums\OrderBy;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$tablesDB = new TablesDB($client);

$result = $tablesDB->createIndex(
    databaseId: '<DATABASE_ID>',
    tableId: '<TABLE_ID>',
    key: '',
    type: IndexType::KEY(),
    columns: [],
    orders: [OrderBy::ASC()], // optional
    lengths: [] // optional
);```
