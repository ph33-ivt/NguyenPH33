<?php

use Illuminate\Database\Seeder;
use App\Country;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Country::class,10)->create();
    }
}
