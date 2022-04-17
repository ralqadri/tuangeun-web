<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RestoImgData>
 */
class RestoImgDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = Carbon::now()->toDateTimeString();
        $id_resto = Restaurant::all()->pluck('id_resto');
        return [
            'img_resto' => $this->faker->imageUrl(640, 480),
            'id_resto' => $this->faker->randomElement($id_resto),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}
