<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'logo_image',
        'brandName',
        'brandSize',
        'brandDescription',
        'brandLocalisation',
        'pack_id',
        'collaboration_id',
        'sector_id',
    ];

    // Relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with the Pack model
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    // Relationship with the Collaboration model
    public function collaboration()
    {
        return $this->belongsTo(Collaboration::class);
    }

    // Relationship with the Sector model
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function posts()
{
    return $this->hasMany(Post::class);
}
}
