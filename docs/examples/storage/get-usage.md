```php
<?php

use Appwrite\Client;
use Appwrite\Services\Storage;
use Appwrite\Enums\UsageRange;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$storage = new Storage($client);

$result = $storage->getUsage(
    range: UsageRange::TWENTYFOURHOURS() // optional
);```
