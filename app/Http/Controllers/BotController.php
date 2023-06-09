<?php

namespace App\Http\Controllers;

use Exception;
use Telegram\Bot\Api;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CreateFeedbackRequest;
use Illuminate\Routing\Middleware\ThrottleRequests;

class BotController extends Controller
{
    /**
     * Бот отправляет сообщение администраторам
     *
     *
     * @param string $message
     * @param bool $markdown - set markdown parse mode
     *
     * @return bool
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
                Log::error($e);
                return false;
            }
        }

        return true;
    }
    public function send(CreateFeedbackRequest $r)
    {
        $data = $r->validated();

        $message = sprintf("*Новое сообщение.*\n\nИмя: *%s*\nEmail: `%s`\n\nСообщение: \n%s", $data['name'], $data['email'], $data['message']);
        $sent = $this->sendMessage($message, true);
        if($sent) {
            return response()->json(['status' => 'success', 'message' => 'Сообщение отправлено!']);
        }
        return response()->json(['status' => 'failed', 'message' => 'Сообщение не было отправлено отправлено!'], 422);
    }
}
