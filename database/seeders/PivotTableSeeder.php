<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
        
        $datas = [
            [
                'course_id' => 16,
                'user_id' => 1,
            ],
            [
                'course_id' => 17,
                'user_id' => 1,
            ],
            [
                'course_id' => 18,
                'user_id' => 1,
            ],
            [
                'course_id' => 19,
                'user_id' => 1,
            ],
            [
                'course_id' => 20,
                'user_id' => 1,
            ],
        ];

        $i = 0;
        $j = 1;
        while ($i < 5)
        {
            foreach ($datas as $data) {
                DB::table('course_user')->insert([
                    'course_id' => $j,
                    'user_id' => $data['user_id'],
                    'name' => weekName($i),
                ]);
                $j++;
            }
            $i++;
        }
    }
}
