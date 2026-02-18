```php
<?php

use Appwrite\Client;
use Appwrite\Services\Project;
use Appwrite\Enums\ProjectUsageRange;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$project = new Project($client);

$result = $project->getUsage(
    startDate: '',
    endDate: '',
    period: ProjectUsageRange::ONEHOUR() // optional
);```
