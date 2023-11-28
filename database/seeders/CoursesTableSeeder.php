<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => '情報デザイン実習A',
                'teacher' => '大同太郎',
                'place' => 'B301',
                'week' => '月',
                'time' => 1,
            ],
            [
                'title' => 'メディアクリエイティブ実習',
                'teacher' => '佐藤健太',
                'place' => 'S301',
                'week' => '月',
                'time' => 2,
            ],
            [
                'title' => '視覚情報デザイン実習',
                'teacher' => '佐藤健太',
                'place' => 'S301',
                'week' => '月',
                'time' => 3,
            ],
            [
                'title' => 'デジタルデザイン論A',
                'teacher' => '近藤史郎',
                'place' => 'X301',
                'week' => '月',
                'time' => 4,
            ],
            [
                'title' => 'デジタルグラフィックス実習',
                'teacher' => '山本仁',
                'place' => 'A1011',
                'week' => '月',
                'time' => 5,
            ],
        ];

        foreach($datas as $data) {
            DB::table('courses')->insert([
                'title' => $data['title'],
                'teacher' => $data['teacher'],
                'place' => $data['place'],
                'week' => $data['week'],
                'time' => $data['time'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
