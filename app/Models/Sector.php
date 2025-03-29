<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Reverse relationship with the Brand model
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
