```php
<?php

use Appwrite\Client;
use Appwrite\Services\Vcs;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$vcs = new Vcs($client);

$result = $vcs->getRepositoryContents(
    installationId: '<INSTALLATION_ID>',
    providerRepositoryId: '<PROVIDER_REPOSITORY_ID>',
    providerRootDirectory: '<PROVIDER_ROOT_DIRECTORY>', // optional
    providerReference: '<PROVIDER_REFERENCE>' // optional
);```
