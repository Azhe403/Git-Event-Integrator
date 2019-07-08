<?php

namespace src\AzheSpace\Logger;

use src\AzheSpace\Bot\Telegram\TelegramBot;

class TelegramLog
{
	/**
	 * @param $json
	 * @return bool
	 */
	public static function logToMe($json)
	{
		$bot = new TelegramBot(BOT_TOKEN);
		$bot->setChatId(myId);
		$text = "<b>Json Data</b>\n" . json_encode($json, 128);
		$bot->Send($text);
		return true;
	}
}
