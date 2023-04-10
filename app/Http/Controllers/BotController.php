<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Api;

class BotController extends Controller
{
    /**
     * Бот отправляет сообщение администраторам
     *
     *
     * @param string $message
     * @param bool $markdown - set markdown parse mode
     *
     * @return void
     */
    public function sendMessage($message, $markdown = false)
    {
        $telegram = new Api(env("BOT_TOKEN"));

        foreach (config('telegram.admins') as $admin) {
            try {
                $telegram->sendMessage([
                    'chat_id' => $admin,
                    'text' => $message,
                    'parse_mode' => $markdown ? 'Markdown' : 'HTML'
                ]);
                Log::info("Отправлено сообщение администратору $admin.");
            } catch (Exception $e) {
                Log::error("Ошибка отправки сообщения администратору $admin.");
            }
        }
    }
}
