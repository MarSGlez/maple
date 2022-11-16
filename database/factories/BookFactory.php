<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Books;

class BookFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ["Suspense", "Comedy", "Love"];
        return [
            'title' => $this->faker->jobTitle,
            'category' => $category[mt_rand(0, count($category) - 1)],
            'author' =>  $this->faker->name,
            'realease_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'publish_date' =>  $this->faker->date($format = 'Y-m-d', $max = 'now'), 
        ];
    }
}