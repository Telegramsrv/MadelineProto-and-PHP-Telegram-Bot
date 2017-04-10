---
title: inputPeerUser
description: inputPeerUser attributes, type and example
---
## Constructor: inputPeerUser  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|user\_id|[int](../types/int.md) | Required|
|access\_hash|[long](../types/long.md) | Required|



### Type: [InputPeer](../types/InputPeer.md)


### Example:

```
$inputPeerUser = ['_' => 'inputPeerUser', 'user_id' => int, 'access_hash' => long, ];
```  

The following syntaxes can also be used:

```
$inputPeerUser = '@username'; // Username

$inputPeerUser = 44700; // bot API id (users)
$inputPeerUser = -492772765; // bot API id (chats)
$inputPeerUser = -10038575794; // bot API id (channels)

$inputPeerUser = 'user#44700'; // tg-cli style id (users)
$inputPeerUser = 'chat#492772765'; // tg-cli style id (chats)
$inputPeerUser = 'channel#38575794'; // tg-cli style id (channels)
```