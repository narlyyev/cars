<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [
                'name' => 'Toyota',
                'image' => '1.svg'
            ],
            [
                'name' => 'Mercedes',
                'image' => '2.svg'
            ],
            [
                'name' => 'BMW',
                'image' => '3.svg'
            ],
            [
                'name' => 'Mitsubishi',
                'image' => '4.svg'
            ],
            [
                'name' => 'Opel',
                'image' => '5.svg'
            ],
            [
                'name' => 'Chrysler',
                'image' => '6.svg'
            ],
        ];

        foreach ($objs as $obj) {
            Brand::create([
                'name' => $obj['name'],
                'slug' => Str::slug($obj['name']),
                'image' => $obj['image'],
            ]);
        }
    }
}
