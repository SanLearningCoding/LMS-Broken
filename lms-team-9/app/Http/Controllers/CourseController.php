<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    public function index(): View
    {
        // Ambil data asli database Vera beserta relasi dosennya
        $courses = Course::with('lecturer')->latest()->get();

        return view('courses.index', compact('courses'));
    }

    public function create(): View
    {
        // Ambil daftar user ber-role dosen untuk isi dropdown
        $lecturers = User::where('role', 'dosen')->get();

        return view('courses.create', compact('lecturers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code'        => 'required|string|unique:courses,code',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'sks'         => 'required|integer|min:1|max:6',
            'lecturer_id' => 'required|exists:users,id',
            'status'      => 'required|in:draft,active,archived',
        ]);

        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil ditambahkan!');
    }

    public function show(Course $course): View
    {
        $course->load('lecturer');

        return view('courses.show', compact('course'));
    }

    public function edit(Course $course): View
    {
        $lecturers = User::where('role', 'dosen')->get();

        return view('courses.edit', compact('course', 'lecturers'));
    }

    public function update(Request $request, Course $course): RedirectResponse
    {
        $validated = $request->validate([
            'code'        => 'required|string|unique:courses,code,' . $course->id,
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'sks'         => 'required|integer|min:1|max:6',
            'lecturer_id' => 'required|exists:users,id',
            'status'      => 'required|in:draft,active,archived',
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
    }

    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}