---
title: messages.sentMessage
description: messages_sentMessage attributes, type and example
---
## Constructor: messages.sentMessage  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|id|[int](../types/int.md) | Required|
|date|[int](../types/int.md) | Required|
|media|[MessageMedia](../types/MessageMedia.md) | Required|
|pts|[int](../types/int.md) | Required|
|pts\_count|[int](../types/int.md) | Required|



### Type: [messages\_SentMessage](../types/messages_SentMessage.md)


### Example:

```
$messages_sentMessage = ['_' => 'messages.sentMessage', 'id' => int, 'date' => int, 'media' => MessageMedia, 'pts' => int, 'pts_count' => int, ];
```  

