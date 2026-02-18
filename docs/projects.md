# Projects Service


```http request
GET https://cloud.appwrite.io/v1/projects
```

** Get a list of all projects. You can use the query params to filter your results.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, teamId, labels, search | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/projects
```

** Create a new project. You can create a maximum of 100 projects per account.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, and hyphen. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Project name. Max length: 128 chars. |  |
| teamId | string | Team unique ID. |  |
| region | string | Project Region. | fra |
| description | string | Project description. Max length: 256 chars. |  |
| logo | string | Project logo. |  |
| url | string | Project URL. |  |
| legalName | string | Project legal Name. Max length: 256 chars. |  |
| legalCountry | string | Project legal Country. Max length: 256 chars. |  |
| legalState | string | Project legal State. Max length: 256 chars. |  |
| legalCity | string | Project legal City. Max length: 256 chars. |  |
| legalAddress | string | Project legal Address. Max length: 256 chars. |  |
| legalTaxId | string | Project legal Tax ID. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}
```

** Get a project by its unique ID. This endpoint allows you to retrieve the project&#039;s details, including its name, description, team, region, and other metadata.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}
```

** Update a project by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| name | string | Project name. Max length: 128 chars. |  |
| description | string | Project description. Max length: 256 chars. |  |
| logo | string | Project logo. |  |
| url | string | Project URL. |  |
| legalName | string | Project legal name. Max length: 256 chars. |  |
| legalCountry | string | Project legal country. Max length: 256 chars. |  |
| legalState | string | Project legal state. Max length: 256 chars. |  |
| legalCity | string | Project legal city. Max length: 256 chars. |  |
| legalAddress | string | Project legal address. Max length: 256 chars. |  |
| legalTaxId | string | Project legal tax ID. Max length: 256 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}
```

** Delete a project by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/api
```

** Update the status of a specific API type. Use this endpoint to enable or disable API types such as REST, GraphQL and Realtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| api | string | API name. |  |
| status | boolean | API status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/api
```

** Update the status of a specific API type. Use this endpoint to enable or disable API types such as REST, GraphQL and Realtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| api | string | API name. |  |
| status | boolean | API status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/api/all
```

** Update the status of all API types. Use this endpoint to enable or disable API types such as REST, GraphQL and Realtime all at once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| status | boolean | API status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/api/all
```

** Update the status of all API types. Use this endpoint to enable or disable API types such as REST, GraphQL and Realtime all at once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| status | boolean | API status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/duration
```

** Update how long sessions created within a project should stay active for. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| duration | integer | Project session length in seconds. Max length: 31536000 seconds. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/limit
```

** Update the maximum number of users allowed in this project. Set to 0 for unlimited users.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| limit | integer | Set the max number of users allowed in this project. Use 0 for unlimited. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/max-sessions
```

** Update the maximum number of sessions allowed per user within the project, if the limit is hit the oldest session will be deleted to make room for new sessions. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| limit | integer | Set the max number of users allowed in this project. Value allowed is between 1-100. Default is 10 |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/memberships-privacy
```

** Update project membership privacy settings. Use this endpoint to control what user information is visible to other team members, such as user name, email, and MFA status.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| userName | boolean | Set to true to show userName to members of a team. |  |
| userEmail | boolean | Set to true to show email to members of a team. |  |
| mfa | boolean | Set to true to show mfa to members of a team. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/mock-numbers
```

** Update the list of mock phone numbers for testing. Use these numbers to bypass SMS verification in development.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| numbers | array | An array of mock numbers and their corresponding verification codes (OTPs). Each number should be a valid E.164 formatted phone number. Maximum of 10 numbers are allowed. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/password-dictionary
```

** Enable or disable checking user passwords against common passwords dictionary. This helps ensure users don&#039;t use common and insecure passwords.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| enabled | boolean | Set whether or not to enable checking user's password against most commonly used passwords. Default is false. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/password-history
```

** Update the authentication password history requirement. Use this endpoint to require new passwords to be different than the last X amount of previously used ones. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| limit | integer | Set the max number of passwords to store in user history. User can't choose a new password that is already stored in the password history list.  Max number of passwords allowed in history is20. Default value is 0 |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/personal-data
```

** Enable or disable checking user passwords against their personal data. This helps prevent users from using personal information in their passwords.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| enabled | boolean | Set whether or not to check a password for similarity with personal data. Default is false. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/session-alerts
```

** Enable or disable session email alerts. When enabled, users will receive email notifications when new sessions are created. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| alerts | boolean | Set to true to enable session emails. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/session-invalidation
```

** Invalidate all existing sessions. An optional auth security setting for projects, and enabled by default for console project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| enabled | boolean | Update authentication session invalidation status. Use this endpoint to enable or disable session invalidation on password change |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/auth/{method}
```

** Update the status of a specific authentication method. Use this endpoint to enable or disable different authentication methods such as email, magic urls or sms in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| method | string | **Required** Auth Method. Possible values: email-password,magic-url,email-otp,anonymous,invites,jwt,phone |  |
| status | boolean | Set the status of this auth method. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/dev-keys
```

** List all the project\&#039;s dev keys. Dev keys are project specific and allow you to bypass rate limits and get better error logging during development.&#039; **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: accessedAt, expire | [] |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/dev-keys
```

** Create a new project dev key. Dev keys are project specific and allow you to bypass rate limits and get better error logging during development. Strictly meant for development purposes only. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/dev-keys/{keyId}
```

** Get a project\&#039;s dev key by its unique ID. Dev keys are project specific and allow you to bypass rate limits and get better error logging during development. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/projects/{projectId}/dev-keys/{keyId}
```

** Update a project\&#039;s dev key by its unique ID. Use this endpoint to update a project\&#039;s dev key name or expiration time.&#039; **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/dev-keys/{keyId}
```

** Delete a project\&#039;s dev key by its unique ID. Once deleted, the key will no longer allow bypassing of rate limits and better logging of errors. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/jwts
```

** Create a new JWT token. This token can be used to authenticate users with custom scopes and expiration time.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| scopes | array | List of scopes allowed for JWT key. Maximum of 100 scopes are allowed. |  |
| duration | integer | Time in seconds before JWT expires. Default duration is 900 seconds, and maximum is 3600 seconds. | 900 |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/keys
```

** Get a list of all API keys from the current project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: expire, accessedAt, name, scopes | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/keys
```

** Create a new API key. It&#039;s recommended to have multiple API keys with strict scopes for separate functions within your project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | Key ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. | unique() |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/keys/{keyId}
```

** Get a key by its unique ID. This endpoint returns details about a specific API key in your project including it&#039;s scopes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/projects/{projectId}/keys/{keyId}
```

** Update a key by its unique ID. Use this endpoint to update the name, scopes, or expiration time of an API key.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 events are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/keys/{keyId}
```

** Delete a key by its unique ID. Once deleted, the key can no longer be used to authenticate API calls.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| keyId | string | **Required** Key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/projects/{projectId}/labels
```

** Update the project labels by its unique ID. Labels can be used to easily filter projects in an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| labels | array | Array of project labels. Replaces the previous labels. Maximum of 1000 labels are allowed, each up to 36 alphanumeric characters long. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/oauth2
```

** Update the OAuth2 provider configurations. Use this endpoint to set up or update the OAuth2 provider credentials or enable/disable providers.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| provider | string | Provider Name |  |
| appId | string | Provider app ID. Max length: 256 chars. |  |
| secret | string | Provider secret key. Max length: 512 chars. |  |
| enabled | boolean | Provider status. Set to 'false' to disable new session creation. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/platforms
```

** Get a list of all platforms in the project. This endpoint returns an array of all platforms and their configurations.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/platforms
```

** Create a new platform for your project. Use this endpoint to register a new platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | Platform type. Possible values are: web, flutter-web, flutter-ios, flutter-android, flutter-linux, flutter-macos, flutter-windows, apple-ios, apple-macos, apple-watchos, apple-tvos, android, unity, react-native-ios, react-native-android. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| key | string | Package name for Android or bundle ID for iOS or macOS. Max length: 256 chars. |  |
| store | string | App store or Google Play store ID. Max length: 256 chars. |  |
| hostname | string | Platform client hostname. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/platforms/{platformId}
```

** Get a platform by its unique ID. This endpoint returns the platform&#039;s details, including its name, type, and key configurations.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| platformId | string | **Required** Platform unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/projects/{projectId}/platforms/{platformId}
```

** Update a platform by its unique ID. Use this endpoint to update the platform&#039;s name, key, platform store ID, or hostname.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| platformId | string | **Required** Platform unique ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| key | string | Package name for android or bundle ID for iOS. Max length: 256 chars. |  |
| store | string | App store or Google Play store ID. Max length: 256 chars. |  |
| hostname | string | Platform client URL. Max length: 256 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/platforms/{platformId}
```

** Delete a platform by its unique ID. This endpoint removes the platform and all its configurations from the project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| platformId | string | **Required** Platform unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/schedules
```

** Get a list of all the project&#039;s schedules. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: resourceType, resourceId, projectId, schedule, active, region | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/schedules
```

** Create a new schedule for a resource. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| resourceType | string | The resource type for the schedule. Possible values: function, execution, message, backup. |  |
| resourceId | string | The resource ID to associate with this schedule. |  |
| schedule | string | Schedule CRON expression. |  |
| active | boolean | Whether the schedule is active. |  |
| data | object | Schedule data as a JSON string. Used to store resource-specific context needed for execution. | {} |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/schedules/{scheduleId}
```

** Get a schedule by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| scheduleId | string | **Required** Schedule ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/service
```

** Update the status of a specific service. Use this endpoint to enable or disable a service in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| service | string | Service name. |  |
| status | boolean | Service status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/service/all
```

** Update the status of all services. Use this endpoint to enable or disable all optional services at once.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| status | boolean | Service status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/smtp
```

** Update the SMTP configuration for your project. Use this endpoint to configure your project&#039;s SMTP provider with your custom settings for sending transactional emails.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| enabled | boolean | Enable custom SMTP service |  |
| senderName | string | Name of the email sender |  |
| senderEmail | string | Email of the sender |  |
| replyTo | string | Reply to email |  |
| host | string | SMTP server host name |  |
| port | integer | SMTP server port | 587 |
| username | string | SMTP server username |  |
| password | string | SMTP server password |  |
| secure | string | Does SMTP server use secure connection |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/smtp
```

** Update the SMTP configuration for your project. Use this endpoint to configure your project&#039;s SMTP provider with your custom settings for sending transactional emails.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| enabled | boolean | Enable custom SMTP service |  |
| senderName | string | Name of the email sender |  |
| senderEmail | string | Email of the sender |  |
| replyTo | string | Reply to email |  |
| host | string | SMTP server host name |  |
| port | integer | SMTP server port | 587 |
| username | string | SMTP server username |  |
| password | string | SMTP server password |  |
| secure | string | Does SMTP server use secure connection |  |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/smtp/tests
```

** Send a test email to verify SMTP configuration.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| emails | array | Array of emails to send test email to. Maximum of 10 emails are allowed. |  |
| senderName | string | Name of the email sender |  |
| senderEmail | string | Email of the sender |  |
| replyTo | string | Reply to email |  |
| host | string | SMTP server host name |  |
| port | integer | SMTP server port | 587 |
| username | string | SMTP server username |  |
| password | string | SMTP server password |  |
| secure | string | Does SMTP server use secure connection |  |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/smtp/tests
```

** Send a test email to verify SMTP configuration.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| emails | array | Array of emails to send test email to. Maximum of 10 emails are allowed. |  |
| senderName | string | Name of the email sender |  |
| senderEmail | string | Email of the sender |  |
| replyTo | string | Reply to email |  |
| host | string | SMTP server host name |  |
| port | integer | SMTP server port | 587 |
| username | string | SMTP server username |  |
| password | string | SMTP server password |  |
| secure | string | Does SMTP server use secure connection |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/team
```

** Update the team ID of a project allowing for it to be transferred to another team. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| teamId | string | Team ID of the team to transfer project to. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/templates/email/{type}/{locale}
```

** Get a custom email template for the specified locale and type. This endpoint returns the template content, subject, and other configuration details.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/templates/email/{type}/{locale}
```

** Update a custom email template for the specified locale and type. Use this endpoint to modify the content of your email templates. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |
| subject | string | Email Subject |  |
| message | string | Template message |  |
| senderName | string | Name of the email sender |  |
| senderEmail | string | Email of the sender |  |
| replyTo | string | Reply to email |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/templates/email/{type}/{locale}
```

** Reset a custom email template to its default value. This endpoint removes any custom content and restores the template to its original state.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Get a custom SMS template for the specified locale and type returning it&#039;s contents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Get a custom SMS template for the specified locale and type returning it&#039;s contents. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Update a custom SMS template for the specified locale and type. Use this endpoint to modify the content of your SMS templates.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |
| message | string | Template message |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Update a custom SMS template for the specified locale and type. Use this endpoint to modify the content of your SMS templates.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |
| message | string | Template message |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Reset a custom SMS template to its default value. This endpoint removes any custom message and restores the template to its original state.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/templates/sms/{type}/{locale}
```

** Reset a custom SMS template to its default value. This endpoint removes any custom message and restores the template to its original state.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| type | string | **Required** Template type |  |
| locale | string | **Required** Template locale |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/webhooks
```

** Get a list of all webhooks belonging to the project. You can use the query params to filter your results.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/projects/{projectId}/webhooks
```

** Create a new webhook. Use this endpoint to configure a URL that will receive events from Appwrite when specific events occur.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| name | string | Webhook name. Max length: 128 chars. |  |
| enabled | boolean | Enable or disable a webhook. | 1 |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| url | string | Webhook URL. |  |
| security | boolean | Certificate verification, false for disabled or true for enabled. |  |
| httpUser | string | Webhook HTTP user. Max length: 256 chars. |  |
| httpPass | string | Webhook HTTP password. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/projects/{projectId}/webhooks/{webhookId}
```

** Get a webhook by its unique ID. This endpoint returns details about a specific webhook configured for a project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| webhookId | string | **Required** Webhook unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/projects/{projectId}/webhooks/{webhookId}
```

** Update a webhook by its unique ID. Use this endpoint to update the URL, events, or status of an existing webhook.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| webhookId | string | **Required** Webhook unique ID. |  |
| name | string | Webhook name. Max length: 128 chars. |  |
| enabled | boolean | Enable or disable a webhook. | 1 |
| events | array | Events list. Maximum of 100 events are allowed. |  |
| url | string | Webhook URL. |  |
| security | boolean | Certificate verification, false for disabled or true for enabled. |  |
| httpUser | string | Webhook HTTP user. Max length: 256 chars. |  |
| httpPass | string | Webhook HTTP password. Max length: 256 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/projects/{projectId}/webhooks/{webhookId}
```

** Delete a webhook by its unique ID. Once deleted, the webhook will no longer receive project events.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| webhookId | string | **Required** Webhook unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/projects/{projectId}/webhooks/{webhookId}/signature
```

** Update the webhook signature key. This endpoint can be used to regenerate the signature key used to sign and validate payload deliveries for a specific webhook.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| webhookId | string | **Required** Webhook unique ID. |  |

