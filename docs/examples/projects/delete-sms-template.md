```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\SmsTemplateType;
use Appwrite\Enums\SmsTemplateLocale;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->deleteSMSTemplate(
    projectId: '<PROJECT_ID>',
    type: SmsTemplateType::VERIFICATION(),
    locale: SmsTemplateLocale::AF()
);```
