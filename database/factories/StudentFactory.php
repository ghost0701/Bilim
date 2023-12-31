<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    public function definition(): array
    {
        $first_name = fake()->firstName();
        $last_name = fake()->lastName();
        $phone = fake()->numberBetween(61000000, 66000000);
        $phone_sms = fake()->numberBetween(61000000, 66000000);

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'full_name' => $first_name .  $last_name,
            'birthday' => fake()->date('Y-m-d', '-8 years'),
            'phone' => '+993' . $phone,
            'phone_sms' => '+993' . $phone_sms,
        ];
    }
}
