<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{

    public function definition(): array
    {

        $first_name = fake()->firstName();
        $last_name = fake()->lastName();

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'full_name' => $first_name . $last_name,
        ];
    }
}
