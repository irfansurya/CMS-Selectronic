<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        

        //User::create([
            //'name' => 'toko surya',
            //'email' => 'surya19@gmail.com',
            //'password' => bcrypt('12345')
        //]);

        //User::create([
            //'name' => 'toko rama',
            //'email' => 'rama19@gmail.com',
            //'password' => bcrypt('12345')
        //]);
        
        User::factory(3)->create();

        Category::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik'
        ]);

        Category::create([
            'nama' => 'Aksesoris',
            'slug' => 'aksesoris'
        ]);

        Product::factory(20)->create();

    }
}
