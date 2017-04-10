<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 07-04-2017
 * Time: 00:56
 */

namespace Longman\TelegramBot;


class MadelineProto
{
    
    public static function login($number, $user_id){
        $settings = json_decode(getenv('MTPROTO_SETTINGS'), true) ?: [];
       
        $MadelineProto = new \danog\MadelineProto\API($settings);


        if (getenv('TRAVIS_COMMIT') == '') {
            $checkedPhone = $MadelineProto->auth->checkPhone(// auth.checkPhone becomes auth->checkPhone
                [
                    'phone_number' => $number,
                ]
            );

        }

        $sentCode = $MadelineProto->phone_login($number);
        echo 'Wrote ' . \danog\MadelineProto\Serialization::serialize($user_id.'.session.madeline', $MadelineProto) . ' bytes' . PHP_EOL;
        return $sentCode;
    }
    
    public static function CompleteLogin($user_id, $code){
        $MadelineProto = \danog\MadelineProto\Serialization::deserialize($user_id.'.session.madeline');

        $authorization = $MadelineProto->complete_phone_login($code);
        return true;
    }
}