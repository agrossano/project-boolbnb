<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Package::class, 3) -> create();
    }
}
