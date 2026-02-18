```php
<?php

use Appwrite\Client;
use Appwrite\Services\Users;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$users = new Users($client);

$result = $users->updateEmail(
    userId: '<USER_ID>',
    email: 'email@example.com'
);```
