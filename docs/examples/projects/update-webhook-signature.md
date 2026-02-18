```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->updateWebhookSignature(
    projectId: '<PROJECT_ID>',
    webhookId: '<WEBHOOK_ID>'
);```
