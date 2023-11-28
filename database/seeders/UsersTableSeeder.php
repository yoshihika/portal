<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => '大同太郎',
                'password' => 'daidotaro'
            ],
            [
                'name' => '学生室',
                'password' => 'gakusei'
            ],
            [
                'name' => '教務室',
                'password' => 'kyoumu'
            ]
            ];

            foreach ($users as $user) {
                DB::table('users')->insert([
                    'name' => $user['name'],
                    'password' => $user['password'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
    }
}
