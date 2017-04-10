---
title: dialogChannel
description: dialogChannel attributes, type and example
---
## Constructor: dialogChannel  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[Peer](../types/Peer.md) | Required|
|top\_message|[int](../types/int.md) | Required|
|top\_important\_message|[int](../types/int.md) | Required|
|read\_inbox\_max\_id|[int](../types/int.md) | Required|
|unread\_count|[int](../types/int.md) | Required|
|unread\_important\_count|[int](../types/int.md) | Required|
|notify\_settings|[PeerNotifySettings](../types/PeerNotifySettings.md) | Required|
|pts|[int](../types/int.md) | Required|



### Type: [Dialog](../types/Dialog.md)


### Example:

```
$dialogChannel = ['_' => 'dialogChannel', 'peer' => Peer, 'top_message' => int, 'top_important_message' => int, 'read_inbox_max_id' => int, 'unread_count' => int, 'unread_important_count' => int, 'notify_settings' => PeerNotifySettings, 'pts' => int, ];
```  

