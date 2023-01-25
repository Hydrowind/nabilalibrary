<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'title' => ucwords($faker->words(2, true)),
            'year' => $faker->year(),
            'author' => $faker->name(),
            'publisher' => $faker->company(),
            'page' => $faker->numberBetween(80, 500),
            'category' => $faker->word(),
            'quantity' => $faker->randomDigitNot(0),
            // 'coverUrl' => $faker->imageUrl(640, 480, 'book', true),
            'coverUrl' => 'https://source.unsplash.com/random/640x480/?bookcover',
            'description' => $faker->text($maxNbChars = 200),
        ];
    }
}
