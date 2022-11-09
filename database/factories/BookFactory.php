<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // only to generate dates that publish LTE release
        $releaseMinDate = Carbon::now();
        $releaseMaxDate = Carbon::now()->addYears(15);
        $publishMinDate = Carbon::now()->subYears(20);
        $publishMaxDate = Carbon::now();
        return [
            'title' => $this->faker->sentence(),
            'category_id' => Category::pluck('id')[$this->faker->numberBetween(1,Category::count()-1)],
            'author_id' => Author::pluck('id')[$this->faker->numberBetween(1,Author::count()-1)],
            'release_date' => $this->faker->dateTimeBetween($releaseMinDate, $releaseMaxDate),
            'publish_date' => $this->faker->dateTimeBetween($publishMinDate, $publishMaxDate)
        ];
    }
}
