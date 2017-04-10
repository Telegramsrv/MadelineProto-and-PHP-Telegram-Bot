---
title: userSelf
description: userSelf attributes, type and example
---
## Constructor: userSelf  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|id|[int](../types/int.md) | Required|
|first\_name|[string](../types/string.md) | Required|
|last\_name|[string](../types/string.md) | Required|
|username|[string](../types/string.md) | Required|
|phone|[string](../types/string.md) | Required|
|photo|[UserProfilePhoto](../types/UserProfilePhoto.md) | Required|
|status|[UserStatus](../types/UserStatus.md) | Required|
|inactive|[Bool](../types/Bool.md) | Required|



### Type: [User](../types/User.md)


### Example:

```
$userSelf = ['_' => 'userSelf', 'id' => int, 'first_name' => string, 'last_name' => string, 'username' => string, 'phone' => string, 'photo' => UserProfilePhoto, 'status' => UserStatus, 'inactive' => Bool, ];
```  

The following syntaxes can also be used:

```
$userSelf = '@username'; // Username

$userSelf = 44700; // bot API id (users)
$userSelf = -492772765; // bot API id (chats)
$userSelf = -10038575794; // bot API id (channels)

$userSelf = 'user#44700'; // tg-cli style id (users)
$userSelf = 'chat#492772765'; // tg-cli style id (chats)
$userSelf = 'channel#38575794'; // tg-cli style id (channels)
```