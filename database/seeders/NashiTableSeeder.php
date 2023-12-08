<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NashiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => '履修なし',
                'teacher' => '----',
                'place' => '----',
                'time' => 1,
                'unit' => 0,
            ],
            [
                'title' => '履修なし',
                'teacher' => '----',
                'place' => '----',
                'time' => 2,
                'unit' => 0,
            ],
            [
                'title' => '履修なし',
                'teacher' => '----',
                'place' => '----',
                'time' => 3,
                'unit' => 0,
            ],
            [
                'title' => '履修なし',
                'teacher' => '----',
                'place' => '----',
                'time' => 4,
                'unit' => 0,
            ],
            [
                'title' => '履修なし',
                'teacher' => '----',
                'place' => '----',
                'time' => 5,
                'unit' => 0,
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
                    'unit' => $data['unit'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            $i++;
        }
    }
}
