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
        $datas = [
            [
                'course_id' => 21,
                'user_id' => 1,
            ],
            [
                'course_id' => 22,
                'user_id' => 1,
            ],
            [
                'course_id' => 23,
                'user_id' => 1,
            ],
            [
                'course_id' => 24,
                'user_id' => 1,
            ],
            [
                'course_id' => 25,
                'user_id' => 1,
            ],
        ];

        foreach ($datas as $data) {
            DB::table('course_user')->insert([
                'course_id' => $data['course_id'],
                'user_id' => $data['user_id'],
                'name' => '金'
            ]);
        }
    }
}
