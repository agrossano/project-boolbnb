<?php

use App\Apartment;
use App\View;
use Illuminate\Database\Seeder;

class ViewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(View::class, 10)
            ->make()
            ->each(function ($session) {
                $apartment = Apartment::inRandomOrder()->first();
                $session->apartment()->associate($apartment);
                $session->save();
            });

    }

}
