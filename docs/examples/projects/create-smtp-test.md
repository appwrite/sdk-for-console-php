```php
<?php

use Appwrite\Client;
use Appwrite\Services\Projects;
use Appwrite\Enums\SMTPSecure;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$projects = new Projects($client);

$result = $projects->createSMTPTest(
    projectId: '<PROJECT_ID>',
    emails: [],
    senderName: '<SENDER_NAME>',
    senderEmail: 'email@example.com',
    host: '',
    replyTo: 'email@example.com', // optional
    port: null, // optional
    username: '<USERNAME>', // optional
    password: '<PASSWORD>', // optional
    secure: SMTPSecure::TLS() // optional
);```
