<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Observers\MessageObserver;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'text' => ['required', 'string'],
        ]);

        Message::create($data);

        return redirect(route('contact'))->with(['success']);
    }
}
