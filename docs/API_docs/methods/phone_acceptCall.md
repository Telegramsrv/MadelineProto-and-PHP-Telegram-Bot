---
title: phone.acceptCall
description: phone.acceptCall parameters, return type and example
---
## Method: phone.acceptCall  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[InputPhoneCall](../types/InputPhoneCall.md) | Required|
|g\_b|[bytes](../types/bytes.md) | Required|
|key\_fingerprint|[long](../types/long.md) | Required|
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

$phone_PhoneCall = $MadelineProto->phone->acceptCall(['peer' => InputPhoneCall, 'g_b' => bytes, 'key_fingerprint' => long, 'protocol' => PhoneCallProtocol, ]);
```