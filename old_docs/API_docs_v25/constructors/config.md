---
title: config
description: config attributes, type and example
---
## Constructor: config  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|date|[int](../types/int.md) | Required|
|expires|[int](../types/int.md) | Required|
|test\_mode|[Bool](../types/Bool.md) | Required|
|this\_dc|[int](../types/int.md) | Required|
|dc\_options|Array of [DcOption](../types/DcOption.md) | Required|
|chat\_size\_max|[int](../types/int.md) | Required|
|broadcast\_size\_max|[int](../types/int.md) | Required|
|online\_update\_period\_ms|[int](../types/int.md) | Required|
|offline\_blur\_timeout\_ms|[int](../types/int.md) | Required|
|offline\_idle\_timeout\_ms|[int](../types/int.md) | Required|
|online\_cloud\_timeout\_ms|[int](../types/int.md) | Required|
|notify\_cloud\_delay\_ms|[int](../types/int.md) | Required|
|notify\_default\_delay\_ms|[int](../types/int.md) | Required|
|chat\_big\_size|[int](../types/int.md) | Required|
|disabled\_features|Array of [DisabledFeature](../types/DisabledFeature.md) | Required|



### Type: [Config](../types/Config.md)


### Example:

```
$config = ['_' => 'config', 'date' => int, 'expires' => int, 'test_mode' => Bool, 'this_dc' => int, 'dc_options' => [Vector t], 'chat_size_max' => int, 'broadcast_size_max' => int, 'online_update_period_ms' => int, 'offline_blur_timeout_ms' => int, 'offline_idle_timeout_ms' => int, 'online_cloud_timeout_ms' => int, 'notify_cloud_delay_ms' => int, 'notify_default_delay_ms' => int, 'chat_big_size' => int, 'disabled_features' => [Vector t], ];
```  

