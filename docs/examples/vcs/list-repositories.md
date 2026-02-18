```php
<?php

use Appwrite\Client;
use Appwrite\Services\Vcs;
use Appwrite\Enums\VCSDetectionType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$vcs = new Vcs($client);

$result = $vcs->listRepositories(
    installationId: '<INSTALLATION_ID>',
    type: VCSDetectionType::RUNTIME(),
    search: '<SEARCH>', // optional
    queries: [] // optional
);```
