<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'name' => $faker->word(),
            'description' => $faker->sentence(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
