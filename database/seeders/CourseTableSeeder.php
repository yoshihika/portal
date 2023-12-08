<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => '実践英語',
                'teacher' => '高橋徹',
                'place' => 'ゴビーホール',
                'time' => 1,
                'unit' => 1,
            ],
            [
                'title' => '社会学B',
                'teacher' => '花田洋子',
                'place' => 'S201',
                'time' => 2,
                'unit' => 2,
            ],
            [
                'title' => 'デジタルグラフィックス実習B',
                'teacher' => '山本誠二',
                'place' => 'D211',
                'time' => 3,
                'unit' => 2,
            ],
            [
                'title' => 'メディアクリエイティブ実習B',
                'teacher' => '喜多川優',
                'place' => 'S101',
                'time' => 4,
                'unit' => 2,
            ],
        ];

        foreach ($datas as $data) {
            DB::table('courses')->insert([
                'title' => $data['title'],
                'teacher' => $data['teacher'],
                'place' => $data['place'],
                'week' => '水',
                'time' => $data['time'],
                'unit' => $data['unit'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
