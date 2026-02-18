```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$project = new Project($client);

$result = $project->updateVariable(
    variableId: '<VARIABLE_ID>',
    key: '<KEY>',
    value: '<VALUE>', // optional
    secret: false // optional
);```
