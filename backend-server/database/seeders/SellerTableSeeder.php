<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Seller;

class SellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Seller::create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'phone' => '01790817447',
            'password' => Hash::make('11111111'),
        ]);
    }
}
