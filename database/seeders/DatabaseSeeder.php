<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'sadmin@admin.com',
            'password' => Hash::make('password'),
        ]);
        Vendor::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@email.com',
            'password' => Hash::make('password'),
        ]);

        Category::factory(10)->create()->each(function ($cat) {
            return $cat->products()->save(Product::factory()->make());
        });

        Tag::factory(5)->create();
        Brand::factory(6)->create();
    }
}
