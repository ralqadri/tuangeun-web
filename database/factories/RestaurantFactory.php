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
        return [
            'name_resto' => $this->faker->word(1),
            'desc_resto' => $this->faker->paragraph(2, true),
            'category' => $this->faker->randomElement(['Restaurant', 'Cafe', 'Fine Dining', 'Warung']),
            'alamat_resto' => $this->faker->streetAddress(),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
