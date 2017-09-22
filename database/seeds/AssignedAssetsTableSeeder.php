<?php

use Illuminate\Database\Seeder;

class AssignedAssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('assignedassets')->delete();
        DB::table('assignedassets')->insert([
        [    
           'user_id'=>"1",
           'asset_id'=>"1",
           'date_assigned'=>'',
           'completion_date'=>'',
        ],
        [
           'user_id'=>"1",
           'asset_id'=>"2",
           'date_assigned'=>'',
           'completion_date'=>'',
        ],
        [
           'user_id'=>"2",
           'asset_id'=>"2",
           'date_assigned'=>'',
           'completion_date'=>'',
        ]
        ]);
    }
}
