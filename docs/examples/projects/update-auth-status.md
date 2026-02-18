```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\AuthMethod;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->updateAuthStatus(
    projectId: '<PROJECT_ID>',
    method: AuthMethod::EMAILPASSWORD(),
    status: false
);```
