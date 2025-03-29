<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBrand extends Model
{
    /** @use HasFactory<\Database\Factories\ContactBrandFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'sector_id', 'influencer_id', 'collaboration_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function influencer()
    {
        return $this->belongsTo(Influencer::class);
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
