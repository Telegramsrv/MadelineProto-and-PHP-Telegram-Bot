---
title: userFull
description: userFull attributes, type and example
---
## Constructor: userFull  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|blocked|[Bool](../types/Bool.md) | Optional|
|phone\_calls\_available|[Bool](../types/Bool.md) | Optional|
|user|[User](../types/User.md) | Required|
|about|[string](../types/string.md) | Optional|
|link|[contacts\_Link](../types/contacts_Link.md) | Required|
|profile\_photo|[Photo](../types/Photo.md) | Optional|
|notify\_settings|[PeerNotifySettings](../types/PeerNotifySettings.md) | Required|
|bot\_info|[BotInfo](../types/BotInfo.md) | Optional|
|common\_chats\_count|[int](../types/int.md) | Required|



### Type: [UserFull](../types/UserFull.md)


### Example:

```
$userFull = ['_' => 'userFull', 'blocked' => true, 'phone_calls_available' => true, 'user' => User, 'about' => string, 'link' => contacts.Link, 'profile_photo' => Photo, 'notify_settings' => PeerNotifySettings, 'bot_info' => BotInfo, 'common_chats_count' => int, ];
```  

