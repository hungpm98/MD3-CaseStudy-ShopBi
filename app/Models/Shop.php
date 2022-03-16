<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
