```php
<?php

use Appwrite\Client;
use Appwrite\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$messaging = new Messaging($client);

$result = $messaging->listMessageLogs(
    messageId: '<MESSAGE_ID>',
    queries: [], // optional
    total: false // optional
);```
