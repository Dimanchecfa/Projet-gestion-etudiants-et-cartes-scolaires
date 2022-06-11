<?php

namespace Database\Seeders;

use App\Models\User;
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
        \App\Models\User::factory(2)->create();

     $this->call(RoleSeeder::class);

      User::find(1)->roles()->attach(1);
    User::find(2)->roles()->attach(2);
      
    }
}
