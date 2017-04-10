<?php

namespace Longman\TelegramBot;

use danog\MadelineProto\API;

class WatchCats
{

    public static function isAdmin($chat_id, $user_id)
    {
        $admins = Request::getChatAdministrators(['chat_id' => $chat_id])->getResult();

		var_dump($admins);
        if (is_array($admins)) {
            foreach ($admins as $admin) {
                if ($admin->getUser()->getId() == $user_id) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function isEnableDeleteChat($chat_id){

        //$array_admins = [];
        $admins = Request::getChatAdministrators(['chat_id' => $chat_id])->getResult();
		var_dump($admins);
        if (is_array($admins)) {

            foreach ($admins as $admin) {
                $array_admins[] = $admin->getUser()->getId();
            }

           //$res = (in_array([(int)(stristr(getenv('API_KEY'), ':', true)), (int) getenv('HUMAN_ID')],[$array_admins]));
 $res1 = (in_array((int)(stristr(getenv('API_KEY'), ':', true)), $array_admins));
  $res2 = (in_array((int)getenv('HUMAN_ID'), $array_admins));
  if(($res1 == true) and ($res2 == true)){
	  return true; 
  }
        }
        return false;

    }

}
