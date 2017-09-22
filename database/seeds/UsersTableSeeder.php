<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
        [
           'name'=>"admin",
           'email'=>"ajay.dasgupta@gmail.com",
           'password'=>bcrypt('pass'),
        ],
        [
           'name'=>"vikas",
           'email'=>"abc.dasgupta@gmail.com",
           'password'=>bcrypt('pass'),
        ],
        [
           'name'=>"admin",
           'email'=>"adc.dasgupta@gmail.com",
           'password'=>bcrypt('pass'),
        ],
            
        ]);
        
    }
}
