<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, 6)
              -> create()
              -> each(function($service){
                $apartment = Apartment::inRandomOrder()-> first();
                $service = Service::inRandomOrder() -> take(rand(1,6)) -> get();
                $apartment -> services() -> attach($service);
              });
    }
}
