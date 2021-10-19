<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            array(
                'cat_name' => 'HTML',
                'version_no' => '5'
            ),
            array(
                'cat_name' => 'Laravel',
                'version_no' => '8'
            )
            
        ]);
    }
}
