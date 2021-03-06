<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(2,true),
            'video_url'   => 'https://youtu.be/mkggXE5e2yk',
            'course_id'   => Course::all()->random()->id
        ];
    }
}
