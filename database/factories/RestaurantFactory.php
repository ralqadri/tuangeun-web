<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Restaurant;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    protected $model = \App\Models\Restaurant::class;

    public function definition()
    {
        $now = Carbon::now()->toDateTimeString();
        $latitude = $this->faker->latitude();
        $longitude = $this->faker->longitude();
        return [
            'name_resto' => $this->faker->word(1),
            'desc_resto' => $this->faker->paragraph(2, true),
            'category' => $this->faker->randomElement(['Restaurant', 'Cafe', 'Fine Dining', 'Warung']),
            'alamat_resto' => $this->faker->streetAddress(),
            'latitude' => $latitude,
            'longitude' => $longitude,
            'imageLink' => $this->faker->imageUrl(640, 480),
            'googleMapsLink' => "http://maps.google.com/maps?q={$latitude},{$longitude}",
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
