<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return code of category by product id';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $productId = $this->argument('id');
        $product = Product::find($productId);
        if ($product === null) {
            $this->error("Invalid or non-existent product ID.");
            return 1;
        }
        $this->info("Find code category for product {$productId}");
        //$code = new Category();
        //$product->send(Category::codeCategory($this->argument('id')));
        $code = DB::table('categories')->select('categories.code')->join('products', 'categories.category_id', '=', 'products.category_id')->where('product_id', '=', $this->argument('id'))->get();
        $this->info("Product with id = {$productId} has category with {$code}");
        $this->info('The command was successful!');
        return 0;
    }
}
