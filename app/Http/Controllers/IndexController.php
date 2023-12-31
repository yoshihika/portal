<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mail;
use App\Models\Course;
use Ramsey\Uuid\Type\Integer;

class IndexController extends Controller
{
    function getWeek($name)
    {
        User::find(1)->courses()->wherePivot('name', $name)->get();
    }

    public function index(int $id)
    {
        $current_user = User::find($id);
        $latest_mails = User::find($id)->mails()->orderBy('created_at', 'desc')->take(5)->get();
        $mon_courses = User::find($id)->courses()->wherePivot('name', '月')->get();
        $tue_courses = User::find($id)->courses()->wherePivot('name', '火')->get();
        $wed_courses = User::find($id)->courses()->wherePivot('name', '水')->get();
        $thu_courses = User::find($id)->courses()->wherePivot('name', '木')->get();
        $fri_courses = User::find($id)->courses()->wherePivot('name', '金')->get();
        $counter = Mail::where('is_read', 1)->count();
        $pin_counter = Mail::where('is_pinned', 1)->count();

        return view('MainMenu.index', [
            'user_id' => $current_user->id,
            'user_name' => $current_user->name,
            'mails' => $latest_mails,
            'mon_courses' => $mon_courses,
            'tue_courses' => $tue_courses,
            'wed_courses' => $wed_courses,
            'thu_courses' => $thu_courses,
            'fri_courses' => $fri_courses,
            'counter' => $counter,
            'pin_counter' => $pin_counter,
        ]);
    }

    public function risyuIndex()
    {

        $mon_datas = User::find(1)->courses()->wherePivot('name', '月')->get();
        $tue_datas = User::find(1)->courses()->wherePivot('name', '火')->get();
        $wed_datas = User::find(1)->courses()->wherePivot('name', '水')->get();
        $thu_datas = User::find(1)->courses()->wherePivot('name', '木')->get();
        $fri_datas = User::find(1)->courses()->wherePivot('name', '金')->get();
        $sum = User::find(1)->courses()->sum('unit');

        return view('System.risyu', compact('mon_datas', 'tue_datas', 'wed_datas', 'thu_datas', 'fri_datas', 'sum'));
    }

    public function confirm()
    {
        $mon_datas = User::find(1)->courses()->wherePivot('name', '月')->get();
        $tue_datas = User::find(1)->courses()->wherePivot('name', '火')->get();
        $wed_datas = User::find(1)->courses()->wherePivot('name', '水')->get();
        $thu_datas = User::find(1)->courses()->wherePivot('name', '木')->get();
        $fri_datas = User::find(1)->courses()->wherePivot('name', '金')->get();

        return view('System.confirmed', compact('mon_datas', 'tue_datas', 'wed_datas', 'thu_datas', 'fri_datas'));
    }

    public function courseList()
    {
        $datas = Course::paginate(20);
        return view('System.courses', compact('datas'));
    }
}
