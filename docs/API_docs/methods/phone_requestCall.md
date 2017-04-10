---
title: phone.requestCall
description: phone.requestCall parameters, return type and example
---
## Method: phone.requestCall  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|user\_id|[InputUser](../types/InputUser.md) | Required|
|g\_a|[bytes](../types/bytes.md) | Required|
|protocol|[PhoneCallProtocol](../types/PhoneCallProtocol.md) | Required|


### Return type: [phone\_PhoneCall](../types/phone_PhoneCall.md)

### Example:


```
$MadelineProto = new \danog\MadelineProto\API();
if (isset($token)) {
    $this->bot_login($token);
}
if (isset($number)) {
    $sentCode = $MadelineProto->phone_login($number);
    echo 'Enter the code you received: ';
    $code = '';
    for ($x = 0; $x < $sentCode['type']['length']; $x++) {
        $code .= fgetc(STDIN);
    }
    $MadelineProto->complete_phone_login($code);
}

$phone_PhoneCall = $MadelineProto->phone->requestCall(['user_id' => InputUser, 'g_a' => bytes, 'protocol' => PhoneCallProtocol, ]);
```