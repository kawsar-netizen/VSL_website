<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'product_id',
    ];

    public function client()
    {
        return $this->belongsTo(ClientLogo::class,'client_id');
    }

}
