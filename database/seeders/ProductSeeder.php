<?php

namespace Database\Seeders;

use Brick\Math\BigInteger;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    use Timestamp;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('products')->insert([
                'product_name' => Str::random(12),
                'code' => Str::random(4),
                'description' => (''),
                'price' => BigInteger::randomRange(100, 100000),
                'image' => '',
                'count' => BigInteger::randomRange(0, 1000)
            ]);
        }
        echo 'Successfully loaded 100 new records';
    }
}
