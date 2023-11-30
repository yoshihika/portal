<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class EditController extends Controller
{
    public function hoge($id)
    {
        function getweek($week)
        {
            $data = User::find(1)->courses()->where('week', $week)->get();
            return $data;
        }
        function getCourses($week)
        {

            $datas = [
                Course::where('week', $week)->where('time', 1)->get(),
                Course::where('week', $week)->where('time', 2)->get(),
                Course::where('week', $week)->where('time', 3)->get(),
                Course::where('week', $week)->where('time', 4)->get(),
                Course::where('week', $week)->where('time', 5)->get(),
            ];

            return $datas;
        }

        switch ($id) {
            case 1:
                $week = '月';
                $datas = getweek('月');
                $lists = getCourses('月');
                $index = 1;
                break;
            case 2:
                $week = '火';
                $datas = getweek('火');
                $lists = getCourses('火');
                $index = 2;
                break;
            case 3:
                $week = '水';
                $datas = getweek('水');
                $lists = getCourses('水');
                $index = 3;
                break;
            case 4:
                $week = '木';
                $datas = getweek('木');
                $lists = getCourses('木');
                $index = 4;
                break;
            case 5:
                $week = '金';
                $datas = getweek('金');
                $lists = getCourses('金');
                $index = 5;
                break;
            default:
                break;
        }
        return view('System.edit', compact('week', 'datas', 'lists', 'index'));
    }

    public function update(Request $request) {
        function getWeekName($name)
        {
            switch ($name) {
                case 1:
                    return '月';
                    break;
                case 2:
                    return '火';
                    break;
                case 3:
                    return '水';
                    break;
                case 4:
                    return '木';
                    break;
                case 5:
                    return '金';
                    break;
                default:
                    break;
            }
        }
        
        User::find(1)->courses()->wherePivot('name', getWeekName($request->week))->detach();
        $i = 0;
        foreach($request->num as $val) {
            $user = User::find(1)->courses()->attach($request->course[$i], ['name' => getWeekName($request->week)]);
            $i++;
        }
        return redirect()->route('system.risyu');
    }
}

