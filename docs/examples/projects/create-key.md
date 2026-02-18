```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\Scopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->createKey(
    projectId: '<PROJECT_ID>',
    name: '<NAME>',
    scopes: [Scopes::SESSIONSWRITE()],
    keyId: '<KEY_ID>', // optional
    expire: '' // optional
);```
