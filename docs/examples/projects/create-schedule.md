```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\ResourceType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->createSchedule(
    projectId: '<PROJECT_ID>',
    resourceType: ResourceType::FUNCTION(),
    resourceId: '<RESOURCE_ID>',
    schedule: '',
    active: false, // optional
    data: [] // optional
);```
