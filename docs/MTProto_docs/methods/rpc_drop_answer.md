---
title: rpc_drop_answer
description: rpc_drop_answer parameters, return type and example
---
## Method: rpc\_drop\_answer  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|req\_msg\_id|[long](../types/long.md) | Required|


### Return type: [RpcDropAnswer](../types/RpcDropAnswer.md)

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

$RpcDropAnswer = $MadelineProto->rpc->drop->answer(['req_msg_id' => long, ]);
```