<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    /** @use HasFactory<\Database\Factories\CollaborationFactory> */
    use HasFactory;

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
