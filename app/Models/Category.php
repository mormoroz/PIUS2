<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopePagination()
    {
        $category = Category::paginate(15);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('category_name', 'like', '%' . request('search') . '%');
        }
    }
}
