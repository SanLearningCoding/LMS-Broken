<?php

namespace Database\Factories;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    protected $model = Assignment::class;

    public function definition(): array
    {
        return [
            'course_id' => Course::factory(), // Otomatis membuat course baru
            'created_by' => User::factory(), // Otomatis membuat user pembuat tugas
            'title' => $this->faker->sentence(4),
            'instructions' => $this->faker->paragraph(),
            'due_at' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'max_score' => 100,
            'allow_late' => $this->faker->boolean(80), // 80% kemungkinan true
            'status' => $this->faker->randomElement(['draft', 'published']),
        ];
    }
}
