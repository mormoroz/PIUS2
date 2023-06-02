<?php

namespace Database\Seeders;

use Brick\Math\BigInteger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('categories')->insert([
                'category_name' => Str::random(12),
                'code' => Str::random(4),
                'active' => BigInteger::randomRange(0, 1),
                'product_id' => BigInteger::randomRange(0, 100),
            ]);
        }
        echo 'Successfully loaded 100 new records';
    }
}
