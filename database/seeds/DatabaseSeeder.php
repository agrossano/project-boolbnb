<?php

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
        $this->call([
          UsersSeeder::class,
          LocationsSeeder::class,
          ApartmentsSeeder::class,
          PackagesSeeder::class,
          SessionsSeeder::class,
          ServicesSeeder::class,
          PartnershipsSeeder::class,
          MessagesSeeder::class
        ]);
    }
}
