```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\OAuthProvider;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->updateOAuth2(
    projectId: '<PROJECT_ID>',
    provider: OAuthProvider::AMAZON(),
    appId: '<APP_ID>', // optional
    secret: '<SECRET>', // optional
    enabled: false // optional
);```
