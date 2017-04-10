---
title: messageMediaVenue
description: messageMediaVenue attributes, type and example
---
## Constructor: messageMediaVenue  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|geo|[GeoPoint](../types/GeoPoint.md) | Required|
|title|[string](../types/string.md) | Required|
|address|[string](../types/string.md) | Required|
|provider|[string](../types/string.md) | Required|
|venue\_id|[string](../types/string.md) | Required|



### Type: [MessageMedia](../types/MessageMedia.md)


### Example:

```
$messageMediaVenue = ['_' => 'messageMediaVenue', 'geo' => GeoPoint, 'title' => string, 'address' => string, 'provider' => string, 'venue_id' => string, ];
```  

