<?php
/**
 * Opencart Telegram Notifier is a program code which allows you to
 * configure notifications in CMS Opencart (3.X version) by using
 * Telegram messenger bot.
 *
 * Copyright (C) 2020  Dmitriy Sokolenko
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * ModelToolTelegram class
 */
class ModelToolTelegram extends Model {
	/**
	 * @param string $bot_token
	 * @param string $chat_id
	 * @param string $text
	 *
	 * @return void
	 */
	public function sendMessage($bot_token, $chat_id, $text) {
		$api_url = 'https://api.telegram.org/bot' . $bot_token . '/sendMessage';

		$handle = curl_init($api_url);

		$parameters = array(
			'chat_id' => $chat_id,
			'text'    => $text
		);

		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handle, CURLOPT_TIMEOUT, 60);
		curl_setopt($handle, CURLOPT_POST, true);
		curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
		curl_setopt($handle, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		curl_exec($handle);

		curl_close($handle);
	}
}