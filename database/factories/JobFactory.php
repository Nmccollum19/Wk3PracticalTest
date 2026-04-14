<?php

namespace Database\Factories;  // This must be the first line with no whitespace before it

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->randomNumber(5),
            'employer_id' => Employer::factory(),  // Ensure each job has an employer
        ];
    }
}
