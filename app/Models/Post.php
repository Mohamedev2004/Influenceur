<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'video', 'images'];

    protected $casts = ['images' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function brand()
{
    return $this->belongsTo(Brand::class);
}
}
