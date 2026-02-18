```php
<?php

use Appwrite\Client;
use Appwrite\Services\Vcs;
use Appwrite\Enums\VCSDetectionType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$vcs = new Vcs($client);

$result = $vcs->createRepositoryDetection(
    installationId: '<INSTALLATION_ID>',
    providerRepositoryId: '<PROVIDER_REPOSITORY_ID>',
    type: VCSDetectionType::RUNTIME(),
    providerRootDirectory: '<PROVIDER_ROOT_DIRECTORY>' // optional
);```
