---
title: ping_delay_disconnect
description: ping_delay_disconnect parameters, return type and example
---
## Method: ping\_delay\_disconnect  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|ping\_id|[long](../types/long.md) | Required|
|disconnect\_delay|[int](../types/int.md) | Required|


### Return type: [Pong](../types/Pong.md)

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

$Pong = $MadelineProto->ping->delay->disconnect(['ping_id' => long, 'disconnect_delay' => int, ]);
```