```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\PlatformType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->createPlatform(
    projectId: '<PROJECT_ID>',
    type: PlatformType::WEB(),
    name: '<NAME>',
    key: '<KEY>', // optional
    store: '<STORE>', // optional
    hostname: '' // optional
);```
