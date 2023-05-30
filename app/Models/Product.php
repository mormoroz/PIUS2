<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('product_name', 'like', '%' . request('search') . '%');
        }
    }

}
