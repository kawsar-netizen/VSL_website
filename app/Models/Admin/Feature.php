<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'tab_name',
        'tab_description',
        'tab_icon',
        'image',
        'status',
    ];
}
