<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serviec extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'client_name',
        'client_image',
        'designation',
        'rating',
        'description',
        'status',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'card_title'
            ]
        ];
    }
}
