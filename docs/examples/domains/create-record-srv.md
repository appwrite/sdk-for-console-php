```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$domains = new Domains($client);

$result = $domains->createRecordSRV(
    domainId: '<DOMAIN_ID>',
    name: '<NAME>',
    value: '<VALUE>',
    ttl: 1,
    priority: null,
    weight: null,
    port: null,
    comment: '<COMMENT>' // optional
);```
