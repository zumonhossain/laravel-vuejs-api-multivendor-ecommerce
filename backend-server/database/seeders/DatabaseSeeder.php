<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        $this->call([
            AdminTableSeeder::class,
            SellerTableSeeder::class,
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Seller::factory(50)->create();
        \App\Models\Slider::factory(8)->create();
        \App\Models\Brand::factory(20)->create();
        \App\Models\Category::factory(30)->create();
        \App\Models\SubCategory::factory(100)->create();
        \App\Models\Product::factory(100)->create();


        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'phone' => '01644954478',
            "isVerified" => 1,
            'password' => Hash::make('11111111'),
        ]);


    }
}
