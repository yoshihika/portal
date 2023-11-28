<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mail;
use App\Models\Course;

class IndexController extends Controller
{
    public function index(int $id) {
        $current_user = User::find($id);
        $latest_mails = Mail::where('user_id', $current_user->id)->orderBy('created_at', 'desc')->take(5)->get();

        return view('MainMenu.index', [
            'user_id' => $current_user->id,
            'user_name' => $current_user->name,
            'mails' => $latest_mails,
        ]);
    }

    public function risyuIndex() {
        function getWeek($name) {
            User::find(1)->courses()->wherePivot('name', $name)->get();
        }
        $mon_datas = User::find(1)->courses()->wherePivot('name', '月')->get();
        $tue_datas = User::find(1)->courses()->wherePivot('name', '火')->get();
        $wed_datas = User::find(1)->courses()->wherePivot('name', '水')->get();
        $thu_datas = User::find(1)->courses()->wherePivot('name', '木')->get();
        $fri_datas = User::find(1)->courses()->wherePivot('name', '金')->get();

        return view('System.hoge', compact('mon_datas', 'tue_datas', 'wed_datas', 'thu_datas', 'fri_datas'));
    }
}
