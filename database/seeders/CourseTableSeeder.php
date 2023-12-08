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
                'title' => 'コンピュータサウンドB',
                'teacher' => '岡田啓介',
                'place' => 'D201',
                'time' => 1,
                'unit' => 2,
            ],
            [
                'title' => '映像デザイン基礎実習2',
                'teacher' => '吉田翔',
                'place' => 'B301',
                'time' => 2,
                'unit' => 2,
            ],
            [
                'title' => 'CAD実習1',
                'teacher' => '船橋光一',
                'place' => 'D201',
                'time' => 3,
                'unit' => 2,
            ],
            [
                'title' => '文化人類学A',
                'teacher' => '高橋匠',
                'place' => 'B304',
                'time' => 4,
                'unit' => 2,
            ],
            [
                'title' => 'デジタルエンジニアリング1',
                'teacher' => '高橋匠',
                'place' => 'D201',
                'time' => 5,
                'unit' => 2,
            ]
        ];

        foreach ($datas as $data) {
            DB::table('courses')->insert([
                'title' => $data['title'],
                'teacher' => $data['teacher'],
                'place' => $data['place'],
                'week' => '月',
                'time' => $data['time'],
                'unit' => $data['unit'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
