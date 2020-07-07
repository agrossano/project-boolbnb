<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Package;
use App\Partnership;

class PartnershipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Partnership::class, 50)
            ->make()
            ->each(function($partnership){
              $apartment = Apartment::inRandomOrder()-> first();
              $package = Package::inRandomOrder()-> first();
              $partnership -> apartment() -> associate($apartment);
              $partnership -> package() -> associate($package);
              $partnership -> save();
            });
    }
}
