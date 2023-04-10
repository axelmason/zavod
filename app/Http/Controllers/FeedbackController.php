<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function send(CreateFeedbackRequest $r)
    {
        $data = $r->validated();
        Feedback::create($data);

        $message = sprintf("*Новое сообщение.*\n\nИмя: *%s*\nEmail: `%s`\n\nСообщение: \n%s", $data['name'], $data['email'], $data['message']);
        $bot = new BotController();
        $bot->sendMessage($message, true);

        return response()->json(['status' => 'success', 'message' => 'Сообщение отправлено!']);
    }

    public function list()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedbacks.list', compact('feedbacks'));
    }

    public function get($feedbackId)
    {
        $feedback = Feedback::findOrFail($feedbackId);

        return view('admin.feedbacks.get', compact('feedback'));
    }

    public function delete($feedbackId)
    {
        Feedback::findOrFail($feedbackId)->delete();

        return to_route('admin.feedbacks.list');
    }
}
