<?php

namespace Database\Factories;

use App\Models\Influencer;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Influencer>
 */
class InfluencerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Influencer::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'profile_image' => $this->faker->imageUrl(),
            'influencerName' => $this->faker->name,
            'influencerDescription' => $this->faker->paragraph,
            'influencerAge' => $this->faker->numberBetween(18, 40),
            'sexe' => $this->faker->randomElement(['Masculin', 'Feminin']),
            'influencerPlatforms' => $this->faker->randomElement([
                ['Instagram', 'Twitter'],
                ['TikTok', 'YouTube'],
            ]),
            'sector_id' => Sector::factory(),
        ];
    }
}
