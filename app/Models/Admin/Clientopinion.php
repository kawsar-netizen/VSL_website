<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientopinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_image',
        'designation',
        'rating',
        'description',
        'status',
    ];
}
