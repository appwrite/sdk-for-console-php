```php
<?php

use Appwrite\Client;
use Appwrite\Services\Databases;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$databases = new Databases($client);

$result = $databases->update(
    databaseId: '<DATABASE_ID>',
    name: '<NAME>', // optional
    enabled: false // optional
);```
