<?php

namespace App\Models\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\ClientLogo;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'multi_image',
        'description',
        'status',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
}
