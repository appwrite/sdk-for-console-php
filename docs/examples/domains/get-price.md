```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;
use Appwrite\Enums\RegistrationType;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$domains = new Domains($client);

$result = $domains->getPrice(
    domain: '',
    periodYears: null, // optional
    registrationType: RegistrationType::NEW() // optional
);```
