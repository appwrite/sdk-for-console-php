```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$domains = new Domains($client);

$result = $domains->updateRecordHTTPS(
    domainId: '<DOMAIN_ID>',
    recordId: '<RECORD_ID>',
    name: '<NAME>',
    value: '<VALUE>',
    ttl: 1,
    comment: '<COMMENT>' // optional
);```
