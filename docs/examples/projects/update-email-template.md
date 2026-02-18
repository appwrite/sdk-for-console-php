```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\EmailTemplateType;
use Appwrite\Enums\EmailTemplateLocale;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->updateEmailTemplate(
    projectId: '<PROJECT_ID>',
    type: EmailTemplateType::VERIFICATION(),
    locale: EmailTemplateLocale::AF(),
    subject: '<SUBJECT>',
    message: '<MESSAGE>',
    senderName: '<SENDER_NAME>', // optional
    senderEmail: 'email@example.com', // optional
    replyTo: 'email@example.com' // optional
);```
