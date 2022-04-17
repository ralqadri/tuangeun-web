<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Restaurant::factory()->count(20)->create();
        \App\Models\RestoImgData::factory()->count(15)->create();
        \App\Models\User::factory()->count(15)->create();

    }
}
