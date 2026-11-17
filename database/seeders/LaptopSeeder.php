<?php

namespace Database\Seeders;

use App\Models\laptop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        laptop::create([
            'brand' => 'Dell',
            'model' => 'XPS 15',
            'processor' => 'Intel Core i7',
            'ram' => 16,
        ]);
    }
}
