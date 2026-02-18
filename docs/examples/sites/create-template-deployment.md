```php
<?php

use Appwrite\Client;
use Appwrite\Services\Sites;
use Appwrite\Enums\TemplateReferenceType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$sites = new Sites($client);

$result = $sites->createTemplateDeployment(
    siteId: '<SITE_ID>',
    repository: '<REPOSITORY>',
    owner: '<OWNER>',
    rootDirectory: '<ROOT_DIRECTORY>',
    type: TemplateReferenceType::BRANCH(),
    reference: '<REFERENCE>',
    activate: false // optional
);```
