<?php

use Illuminate\Database\Seeder;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('assets')->delete();
        DB::table('assets')->insert([
        [
           'name'=>"Planner",
           'type'=>"launchable",
           'url'=>'',
           'image'=>'',
        ],
        [
           'name'=>"Sales Simulation #1",
           'type'=>"launchable",
           'url'=>'',
           'image'=>'',
        ],
        [
           'name'=>"Sales Simulation #2",
           'type'=>"launchable",
           'url'=>'',
           'image'=>'',
        ]
        ]);
    }
}
