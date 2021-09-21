<?php

namespace Database\Seeders;

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
        
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(Category_ProductTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
