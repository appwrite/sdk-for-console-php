```php
<?php

use Appwrite\Client;
use Appwrite\Services\Teams;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$teams = new Teams($client);

$result = $teams->getPrefs(
    teamId: '<TEAM_ID>'
);```
