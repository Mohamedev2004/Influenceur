<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfluencer extends Model
{
    /** @use HasFactory<\Database\Factories\ContactInfluencerFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'sector_id', 'brand_id', 'collaboration_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function collaboration()
    {
        return $this->belongsTo(Collaboration::class);
    }
}
