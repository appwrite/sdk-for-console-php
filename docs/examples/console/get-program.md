```php
<?php

use Appwrite\Client;
use Appwrite\Services\Console;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$console = new Console($client);

$result = $console->getProgram(
    programId: '<PROGRAM_ID>'
);```
