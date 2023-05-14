<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'alias', 'description', 'image', 'warehouse_id', 'category_id'];

    protected $casts = [
        'warehouse_id' => 'integer'
    ];

    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
