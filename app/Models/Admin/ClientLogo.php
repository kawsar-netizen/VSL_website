<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
