<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->unique()->bothify('??-###')), // Contoh: IF-102
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'sks' => $this->faker->randomElement([2, 3, 4]),
            'lecturer_id' => User::factory(), // Otomatis membuat user baru sebagai dosen jika belum ada
            'status' => $this->faker->randomElement(['draft', 'active', 'archived']),
        ];
    }
}
