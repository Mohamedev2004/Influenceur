<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    /** @use HasFactory<\Database\Factories\InfluencerFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'profile_image', 'influencerName', 'influencerDescription', 'influencerAge', 'sexe', 'influencerPlatforms', 'sector_id'];

    protected $casts = ['influencerPlatforms' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function contacts()
    {
        return $this->hasMany(ContactBrand::class);
    }
}
