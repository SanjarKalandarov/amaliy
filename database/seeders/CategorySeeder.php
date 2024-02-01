<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create(['name'=>'Web Design']);
        \App\Models\Category::create(['name'=>'Online marketing']);
        \App\Models\Category::create(['name'=>'Keyword Research']);
        \App\Models\Category::create(['name'=>'Email Marketing']);
    }
}
