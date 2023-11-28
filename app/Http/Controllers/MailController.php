<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mail;

class MailController extends Controller
{
    public function index(int $id) {
        $users = User::all();

        $current_user = User::find($id);
        
        $mails = Mail::where('user_id', $current_user->id)->orderBy('created_at', 'desc')->get();

        return view('MainMenu.newsList', [
            'mails' => $mails,
            'current_user_id' => $current_user->id,
        ]);
    }

    public function check(int $id) {
        $current_mail = Mail::find($id);

        return view('MainMenu.news', [
            'contents' => $current_mail
        ]);
    }
}
