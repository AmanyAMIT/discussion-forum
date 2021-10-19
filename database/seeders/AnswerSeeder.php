<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('answers')->insert([
            array(
                'answer' => 'You can use <a> tag to insert link in HTML',
                'forum_id' => '1',
                'user_id' => '2',
                'status' => '0',
                'rate' => '0'
            ),
            array(
                'answer' => 'MVC stands for Model View Controller',
                'forum_id' => '2',
                'user_id' => '3',
                'status' => '0',
                'rate' => '0'
            ),
            ]);
    }
}
