# Console Service


```http request
GET https://cloud.appwrite.io/v1/console/campaigns/{campaignId}
```

** Receive the details of a campaign using its ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| campaignId | string | **Required** ID of the campaign |  |


```http request
GET https://cloud.appwrite.io/v1/console/coupons/{couponId}
```

** Get the details of a coupon using it&#039;s coupon ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| couponId | string | **Required** ID of the coupon |  |


```http request
GET https://cloud.appwrite.io/v1/console/plans
```

** Return a list of all available plans. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platform | string | Platform type | appwrite |


```http request
GET https://cloud.appwrite.io/v1/console/plans/{planId}
```

** Get the details of a plan using its plan ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| planId | string | **Required** Plan id |  |


```http request
GET https://cloud.appwrite.io/v1/console/programs/{programId}
```

** Receive the details of a program using its ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| programId | string | **Required** ID of the program |  |


```http request
POST https://cloud.appwrite.io/v1/console/programs/{programId}/memberships
```

** Create a new membership for an account to a program. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| programId | string | **Required** ID of the program |  |


```http request
GET https://cloud.appwrite.io/v1/console/regions
```

** Get all available regions for the console. **


```http request
GET https://cloud.appwrite.io/v1/console/resources
```

** Check if a resource ID is available. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| value | string | **Required** Resource value. |  |
| type | string | **Required** Resource type. |  |


```http request
POST https://cloud.appwrite.io/v1/console/sources
```

** Create a new source. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| ref | string | Ref param |  |
| referrer | string | Referrer |  |
| utmSource | string | Utm source |  |
| utmCampaign | string | Utm campaign |  |
| utmMedium | string | Utm medium |  |


```http request
GET https://cloud.appwrite.io/v1/console/suggestions/columns
```

** Suggests column names and their size limits based on the provided table name. The API will also analyze other tables in the same database to provide context-aware suggestions, ensuring consistency across schema design. Users may optionally provide custom context to further refine the suggestions. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| context | string | Optional user provided context to refine suggestions. |  |
| min | integer | Minimum number of suggestions to generate. | 3 |
| max | integer | Maximum number of suggestions to generate. | 7 |


```http request
GET https://cloud.appwrite.io/v1/console/suggestions/indexes
```

** Suggests database indexes for table columns based on the provided table structure and existing columns. The API will also analyze the table&#039;s column types, names, and patterns to recommend optimal indexes that improve query performance for common database operations like filtering, sorting, and searching. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| databaseId | string | **Required** Database ID. |  |
| tableId | string | **Required** Table ID. |  |
| min | integer | Minimum number of suggestions to generate. | 1 |
| max | integer | Maximum number of suggestions to generate. | 4 |


```http request
GET https://cloud.appwrite.io/v1/console/variables
```

** Get all Environment Variables that are relevant for the console. **

