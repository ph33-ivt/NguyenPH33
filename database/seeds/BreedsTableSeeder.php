<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cách 1
        factory(App\Breed::class, 5)->create();
        // cách 2 tạo 1 record
        // Breed::create([
        //     'name' =>'breed1'
        // ]);
        // //cách 3 
        // Breed::insert([
        //     [
        //         'name'=>'breed2'
        //     ],
        //     [
        //         'name'=>'breed3'
        //     ]
        // ]);
    }
}
