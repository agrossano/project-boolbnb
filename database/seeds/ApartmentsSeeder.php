<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Location;
use App\User;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apartment::class, 50)
              ->make()
              ->each(function($apartment){
                $location = Location::inRandomOrder()-> first();
                $user = User::inRandomOrder()-> first();
                $apartment -> location() -> associate($location);
                $apartment -> user() -> associate($user);
                $apartment -> save();
              });

    }
}
