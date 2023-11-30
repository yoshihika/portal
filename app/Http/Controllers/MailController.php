<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mail;

class MailController extends Controller
{
    public function index() {

        $current_user = User::find(1);
        
        $mails = Mail::where('user_id', $current_user->id)->orderBy('created_at', 'desc')->paginate(15);
        $counter = Mail::where('is_read', 1)->count();

        return view('MainMenu.newsList', [
            'mails' => $mails,
            'current_user_id' => $current_user->id,
            'counter' => $counter,
        ]);
    }

    public function check(int $id) {
        $current_mail = Mail::find($id);
        $current_mail->is_read = 0;
        $current_mail->save();

        return view('MainMenu.news', [
            'contents' => $current_mail
        ]);
    }

    public function pinned(Request $request) {
        $current_mail = Mail::find($request->mail_id);
        if($current_mail->is_pinned != 1)
        {
            $current_mail->is_pinned = 1;
        } else 
        {
            $current_mail->is_pinned = 0;
        }
        $current_mail->save();
        return redirect()->route('news-list');
    }

}
