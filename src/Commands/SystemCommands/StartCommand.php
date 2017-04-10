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
use Longman\TelegramBot\Entities\InlineKeyboard;


/**
 * Start command
 */
class StartCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'start';

    /**
     * @var string
     */
    protected $description = 'Start command';

    /**
     * @var string
     */
    protected $usage = '/start';

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
        if ($message->getChat()->isPrivateChat()) {
            $chat_id = $message->getChat()->getId();
            $text = 'Hi!' . PHP_EOL . 'I am Bot, 🗑 removing notification!' . PHP_EOL . '👥 Add me to a group and ⚙ /auth'. PHP_EOL . ' '. PHP_EOL . 'Type /help to see all commands!';
            //https://telegram.me/Jimmy_chatbot?startgroup=new
            $inline_keyboard[] = [
                [
                    'text' => "👥 Add me to a group",
                    'url' => 'https://telegram.me/' . $this->getTelegram()->getBotName() . '?startgroup=new'
                ]
            ];

            $data = [
                'chat_id' => $chat_id,
                'text' => $text,
            ];

            $data['reply_markup'] = new InlineKeyboard(...$inline_keyboard);


            return Request::sendMessage($data);
        }
        return Request::emptyResponse();

    }
}
