<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(1)->create();
        \App\Models\Area::factory(7)->create();
        \App\Models\Responsable::factory(20)->create();
        \App\Models\Computadora::factory(20)->create();
        
    }
}
