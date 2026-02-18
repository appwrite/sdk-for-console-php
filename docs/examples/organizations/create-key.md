```php
<?php

use Appwrite\Client;
use Appwrite\Services\Organizations;
use Appwrite\Enums\Scopes;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$organizations = new Organizations($client);

$result = $organizations->createKey(
    organizationId: '<ORGANIZATION_ID>',
    name: '<NAME>',
    scopes: [Scopes::PLATFORMSREAD()],
    expire: '' // optional
);```
