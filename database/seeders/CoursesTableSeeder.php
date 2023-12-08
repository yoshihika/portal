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
                'title' => '造形デザイン演習',
                'teacher' => '山田花子',
                'place' => 'S101',
                'time' => 1,
                'unit' => 2,
            ],
            [
                'title' => '基礎デザイン論',
                'teacher' => '太田健一',
                'place' => 'ゴビーホール',
                'time' => 2,
                'unit' => 2,
            ],
            [
                'title' => '情報デザイン実習A',
                'teacher' => '加藤英夫',
                'place' => 'S301',
                'time' => 3,
                'unit' => 2,
            ],
            [
                'title' => 'クリエイティブデザイン論',
                'teacher' => '木村康弘',
                'place' => 'X301',
                'time' => 4,
                'unit' => 2,
            ],
            [
                'title' => 'メディアクリエイティブ実習',
                'teacher' => '山本仁',
                'place' => 'A1011',
                'time' => 5,
                'unit' => 2,
            ],
        ];

        function weekName($i)
        {
            switch ($i) {
                case 0:
                    return '月';
                    break;
                case 1:
                    return '火';
                    break;
                case 2:
                    return '水';
                    break;
                case 3:
                    return '木';
                    break;
                case 4:
                    return '金';
                    break;
                default:
                    break;
            }
        }

        $i = 0;
        while ($i < 5) {
            foreach ($datas as $data) {
                DB::table('courses')->insert([
                    'title' => $data['title'],
                    'teacher' => $data['teacher'],
                    'place' => $data['place'],
                    'week' => weekName($i),
                    'time' => $data['time'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            $i++;
        }
    }
}
