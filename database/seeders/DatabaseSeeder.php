<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\User;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Eloquent::unguard();
        $this->call(UsersTableSeeder::class); 
    }
}
