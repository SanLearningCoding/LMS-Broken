<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Assignment;
use App\Models\Submission;
use App\Models\Grade;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([DemoAccountSeeder::class]);

        $dosenList = User::factory(3)->create(['role' => 'dosen']);
        $mahasiswaList = User::factory(30)->create(['role' => 'mahasiswa']);

        $courses = Course::factory(5)->recycle($dosenList)->create();

        foreach ($courses as $course) {
            $enrolledStudents = $mahasiswaList->random(18);
            foreach ($enrolledStudents as $student) {
                $course->students()->attach($student->id, ['enrolled_at' => now()]);
            }

            $assignments = Assignment::factory(3)->create([
                'course_id' => $course->id,
                'created_by' => $course->lecturer_id,
            ]);

            foreach ($assignments as $assignment) {
                foreach ($enrolledStudents->random(10) as $student) {
                    $submission = Submission::create([
                        'assignment_id' => $assignment->id,
                        'user_id' => $student->id,
                        'file_path' => 'submissions/dummy.pdf',
                        'original_name' => 'tugas.pdf',
                        'file_size' => 1024,
                        'submitted_at' => now(),
                        'is_late' => false,
                    ]);

                    Grade::create([
                        'submission_id' => $submission->id,
                        'graded_by' => $course->lecturer_id,
                        'score' => rand(70, 100),
                        'feedback' => 'Bagus!',
                        'graded_at' => now(),
                    ]);
                }
            }
        }
    }
}