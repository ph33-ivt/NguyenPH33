<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('products')->insert([
            // [
            // 'name' => Str::random(10),
            // 'quantity' => rand(2,10),
            // 'description' => Str::random(10),
            // ],
        //]);
        // factory(Product::class, 10)->create()->each(function ($product) {
        //     //create 5 posts for each user
        //     factory(Category::class, 5)->create(['category_id'=>$product->id]);
        // });
       
    }
}
