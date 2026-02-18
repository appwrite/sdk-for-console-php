```php
<?php

use Appwrite\Client;
use Appwrite\Services\Backups;
use Appwrite\Enums\BackupServices;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$backups = new Backups($client);

$result = $backups->createArchive(
    services: [BackupServices::DATABASES()],
    resourceId: '<RESOURCE_ID>' // optional
);```
