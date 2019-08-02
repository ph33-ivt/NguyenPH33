<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\BreedController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(BreedsTableSeeder::class);
         //$this->call(CatsTableSeeder::class);
         $this ->call ([
           // UserTableSeeder::class,
            BreedsTableSeeder::class,
            CatsTableSeeder::class,
            CategoriesTableSeeder::class,
            CountriesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class
            //ProductsTableSeeder::class,
         ]);
         
    }
}

