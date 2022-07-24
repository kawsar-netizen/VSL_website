<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serviec extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'card_title',
        'slug',
        'card_description',
        'card_icon',
        'card_image',
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
