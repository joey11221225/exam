<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        product::create([
            "product"=>"Tomato",
            "mass"=>"100",
            "price"=>"2.50"
        ]);

        product::create([
            "product"=>"Pomato",
            "mass"=>"100",
            "price"=>"2.00"
        ]);

        product::create([
            "product"=>"Cucumber",
            "mass"=>"100",
            "price"=>"3.00"
        ]);

        product::create([
            "product"=>"Onion",
            "mass"=>"100",
            "price"=>"3.30"
        ]);

        product::create([
            "product"=>"Broccroli",
            "mass"=>"100",
            "price"=>"2.00"
        ]);
    }
}
