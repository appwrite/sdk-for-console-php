```php
<?php

use Appwrite\Client;
use Appwrite\Services\Account;

$client = (new Client())
    ->setEndpoint('https://<REGION>.cloud.appwrite.io/v1') // Your API Endpoint
    ->setProject('<YOUR_PROJECT_ID>'); // Your project ID

$account = new Account($client);

$result = $account->updatePaymentMethodProvider(
    paymentMethodId: '<PAYMENT_METHOD_ID>',
    providerMethodId: '<PROVIDER_METHOD_ID>',
    name: '<NAME>',
    state: '<STATE>' // optional
);```
