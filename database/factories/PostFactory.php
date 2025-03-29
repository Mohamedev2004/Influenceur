<?php
namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'video' => $this->faker->optional()->word . '.mp4',
            'images' => $this->faker->optional()->imageUrl(800, 600), // default single image
        ];
    }

    /**
     * Generate a maximum of 3 image URLs from an external API.
     *
     * @return array<string>
     */
    public function withApiImages()
    {
        $images = [];
        $maxImages = 3;
        $imageApiUrl = 'https://picsum.photos/v2/list?page=1&limit=' . $maxImages; // Using Picsum as an example

        // Make an HTTP request to the API and get a list of image URLs
        $response = Http::get($imageApiUrl);

        if ($response->successful()) {
            // Loop through the API response to get image URLs
            foreach ($response->json() as $imageData) {
                $images[] = $imageData['download_url']; // Using the download URL from the API response
            }
        }

        return $images;
    }
}
