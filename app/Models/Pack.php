<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    /** @use HasFactory<\Database\Factories\PackFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_pack');
    }
}
