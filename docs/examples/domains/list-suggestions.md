```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;
use Appwrite\Enums\FilterType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$domains = new Domains($client);

$result = $domains->listSuggestions(
    query: '<QUERY>',
    tlds: [], // optional
    limit: null, // optional
    filterType: FilterType::PREMIUM(), // optional
    priceMax: null, // optional
    priceMin: null // optional
);```
