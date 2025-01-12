<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'item_name',
        'description',
        'image',
        'price',
        'category_id',
        'published',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
