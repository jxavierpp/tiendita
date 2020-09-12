<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Carpetas', 'Libretas y Cuadernos', 'Estuches', 'Mochilas', 'Libros', 'Utiles'];

        foreach($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }

        $products = ['Lapiz 1B', 'Lapiz 2B', 'Lapiz 3B', 'Lapiz 4B', 'Lapiz 5B', 'Lapiz 6B'];
        
        $faker = Faker\Factory::create();

        foreach($products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product;
            $newProduct->cost = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100);
            $newProduct->inventory = $faker->numberBetween($min = 25, $max = 250);
            $newProduct->availability = $faker->boolean();
            $newProduct->category_id = $faker->numberBetween($min = 1, $max = 6);
            $newProduct->save();
        }
    }
}
