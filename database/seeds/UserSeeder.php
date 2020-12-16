<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        User::insert(factory(User::class, 1)->raw([
            "name" => "Percy",            
            "email" => "7@percy.me",
            "password" => Hash::make('1')
        ]));
        
        
    }
}
