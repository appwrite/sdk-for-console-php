```php
<?php

use Appwrite\Client;
use Appwrite\Services\Domains;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$domains = new Domains($client);

$result = $domains->createPurchase(
    domain: '',
    organizationId: '<ORGANIZATION_ID>',
    firstName: '<FIRST_NAME>',
    lastName: '<LAST_NAME>',
    email: 'email@example.com',
    phone: '+12065550100',
    billingAddressId: '<BILLING_ADDRESS_ID>',
    paymentMethodId: '<PAYMENT_METHOD_ID>',
    addressLine3: '<ADDRESS_LINE3>', // optional
    companyName: '<COMPANY_NAME>', // optional
    periodYears: 1 // optional
);```
