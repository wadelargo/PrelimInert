<?php

namespace Database\Factories;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'position' => fake()->jobTitle(),
            'department_id' => fake()->randomElement(Departments::pluck('id'))
        ];
    }
}
