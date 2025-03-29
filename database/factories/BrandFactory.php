<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Collaboration;
use App\Models\Pack;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Brand::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'logo_image' => $this->faker->imageUrl(),
            'brandName' => $this->faker->company,
            'brandSize' => $this->faker->randomElement(['Petite', 'Moyenne', 'Grande']),
            'brandDescription' => $this->faker->paragraph,
            'brandLocalisation' => $this->faker->city,
            'pack_id' => Pack::factory(),
            'collaboration_id' => Collaboration::factory(),
            'sector_id' => Sector::factory(),
        ];
    }
}
