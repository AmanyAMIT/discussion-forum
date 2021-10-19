<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('forums')->insert([
            array(
                'title' => 'HTML links',
                'body' => 'How to insert link in HTML?',
                'cat_id' => '1',
                'user_id' => '1'
            ),
            array(
                'title' => 'MVC Principle',
                'body' => 'What does MVC stand for?',
                'cat_id' => '2',
                'user_id' => '2'
            ),
            
        ]);
    }
}
