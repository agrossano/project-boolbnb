<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages ={
        {
            'name'=>'basic',
            'price_of_package'=>'2.99',
            'number_of_houres'=>'24'
            }

        {
            'name'=>'medium',
                'price_of_package'=>'5.99',
                'number_of_houres'=>'72'
            }
        {
            'name'=>'gold'
            'price_of_package'=>'9.99',
            'number_of_houres'=>'144',
            }
    }

        foreach ($packages as $package) {
            $sponsor = new Package([
                $sponsor->'name' = $package['name'];
                $sponsor->'price_of_package' = $package['price_of_package'];
                $sponsor->'number_of_houres' = $package['number_of_houres'];
            ])
                $package->save();
            )

        }


    }
}
