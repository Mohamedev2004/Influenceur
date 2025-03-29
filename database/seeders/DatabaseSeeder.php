<?php

namespace Database\Seeders;

use App\Models\Brand;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Collaboration;
use App\Models\ContactBrand;
use App\Models\ContactInfluencer;
use App\Models\Feature;
use App\Models\Influencer;
use App\Models\Pack;
use App\Models\Sector;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create sectors and collaborations
        Sector::factory(5)->create();
        Collaboration::factory(3)->create();

        // Create packs and features
        $packs = Pack::factory(3)->create();
        Feature::factory(5)->create();

        // Attach features to packs
        foreach ($packs as $pack) {
            $pack->features()->attach(Feature::all()->random(2));
        }

        // Create 140 users (Admin, Brand, Influencer)
        User::factory(140)->create()->each(function ($user) {
            if ($user->role == 'brand') {
                Brand::factory()->create(['user_id' => $user->id]);
            } elseif ($user->role == 'influencer') {
                Influencer::factory()->create(['user_id' => $user->id]);
            }
        });

        // Create posts for users
        User::all()->each(function ($user) {
            $user->posts()->createMany([
                ['video' => 'video.mp4', 'images' => json_encode(['image1.jpg', 'image2.jpg'])],
                ['video' => 'video2.mp4', 'images' => json_encode(['image3.jpg', 'image4.jpg'])],
            ]);
        });

        // Create contact records
        ContactBrand::factory(5)->create();
        ContactInfluencer::factory(5)->create();

        // Create sponsors
        Sponsor::factory(5)->create();
    }
}
