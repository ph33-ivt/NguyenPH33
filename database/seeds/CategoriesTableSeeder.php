<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 5 Category
        factory(App\Category::class, 5)->create()->each(function ($category) {
            //create 10 product for a category
            factory(Product::class, 10)->create(['category_id'=>$category->id]);
        });
        // factory(Category::class, 2)->create()->each(function ($category) {
        //     $category->products()->saveMany(factory(Product::class, 2)->make());
        // });
       
    }
}
