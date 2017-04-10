---
title: updateUserPhoto
description: updateUserPhoto attributes, type and example
---
## Constructor: updateUserPhoto  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|user\_id|[int](../types/int.md) | Required|
|date|[int](../types/int.md) | Required|
|photo|[UserProfilePhoto](../types/UserProfilePhoto.md) | Required|
|previous|[Bool](../types/Bool.md) | Required|



### Type: [Update](../types/Update.md)


### Example:

```
$updateUserPhoto = ['_' => 'updateUserPhoto', 'user_id' => int, 'date' => int, 'photo' => UserProfilePhoto, 'previous' => Bool, ];
```  

