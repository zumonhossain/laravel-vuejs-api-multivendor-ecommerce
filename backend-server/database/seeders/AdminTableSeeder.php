<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '01852669486',
            'password' => Hash::make('11111111'),
        ]);
    }
}
