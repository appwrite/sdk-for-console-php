# Project Service


```http request
GET https://cloud.appwrite.io/v1/project/usage
```

** Get comprehensive usage statistics for your project. View metrics including network requests, bandwidth, storage, function executions, database usage, and user activity. Specify a time range with startDate and endDate, and optionally set the data granularity with period (1h or 1d). The response includes both total counts and detailed breakdowns by resource, along with historical data over the specified period. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| startDate | string | **Required** Starting date for the usage |  |
| endDate | string | **Required** End date for the usage |  |
| period | string | Period used | 1d |


```http request
GET https://cloud.appwrite.io/v1/project/variables
```

** Get a list of all project variables. These variables will be accessible in all Appwrite Functions at runtime. **


```http request
POST https://cloud.appwrite.io/v1/project/variables
```

** Create a new project variable. This variable will be accessible in all Appwrite Functions at runtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. | 1 |


```http request
GET https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Get a project variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Update project variable by its unique ID. This variable will be accessible in all Appwrite Functions at runtime. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Delete a project variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable unique ID. |  |

