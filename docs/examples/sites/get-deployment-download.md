```php
<?php

use Appwrite\Client;
use Appwrite\Services\Sites;
use Appwrite\Enums\DeploymentDownloadType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$sites = new Sites($client);

$result = $sites->getDeploymentDownload(
    siteId: '<SITE_ID>',
    deploymentId: '<DEPLOYMENT_ID>',
    type: DeploymentDownloadType::SOURCE() // optional
);```
