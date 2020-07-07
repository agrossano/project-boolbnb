<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Session;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Session::class, 10)
            ->make()
            ->each(function($session){
              $apartment = Apartment::inRandomOrder()-> first();
              $session -> apartment() -> associate($apartment);
              $session-> save();
            });
    }
}
