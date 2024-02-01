<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin')
        ]);
//        $user->roles()->attach([1,3]);
//                $user2=User::create([
//            'name'=>'sanjar',
//            'email'=>'sanjar@gmail.com',
//            'password'=>Hash::make('admin')
//        ]);
//        $user2->roles()->attach(3);


    }
}
