<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\WatchCats;
use Longman\TelegramBot\MadelineProto;

/**
 * New chat member command
 */
class NewchatmemberCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'Newchatmember';

    /**
     * @var string
     */
    protected $description = 'New Chat Member';

    /**
     * @var string
     */
    protected $version = '1.1.0';

    /**
     * Command execute method
     *
     * @return mixed
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function execute()
    {
        $message = $this->getMessage();
        var_dump($message);

        if(WatchCats::isEnableDeleteChat((float) ($message->getChat()->getId()))) {

		var_dump('WatchCats');
            $chat_id = $message->getChat()->getId();

            $message_id = $message->getMessageId();

            MadelineProto::RmFlood((float)$chat_id, $message_id);
        }
        //$member  = $message->getNewChatMember();
        //$text    = 'Hi there!';

        //if (!$message->botAddedInChat()) {
        //    $text = 'Hi ' . $member->tryMention() . '!';
        //}

        //$data = [
        //    'chat_id' => $chat_id,
        //    'text'    => $text,
        //];

        return Request::emptyResponse();

        //return Request::sendMessage($data);
    }
}
