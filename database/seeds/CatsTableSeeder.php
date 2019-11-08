<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cat::class, 20)->create();
    }
}
