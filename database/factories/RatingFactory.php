<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_restos = DB::table('restaurants')->pluck('id_resto');
        $id_users= DB::table('users')->pluck('id_user');


        return [
            'rate' => $this->faker->numberBetween(1,5),
            'review' => $this->faker->paragraph(2, true),
            'id_resto' => $this->faker->randomElement($id_restos),
            'id_user' => $this->faker->randomElement($id_users)
        ];
    }
}
