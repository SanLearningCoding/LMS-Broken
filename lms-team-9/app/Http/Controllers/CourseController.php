<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CourseController extends Controller
{
    protected array $courses = [
        [
            'kode' => 'SI-251-4007',
            'nama' => 'Struktur Data',
            'sks' => 3,
            'dosen' => 'Dr. Budi Santoso, M.Kom',
            'deskripsi' => 'Membahas struktur data dasar seperti array, linked list, stack, queue, tree, dan graph beserta analisis kompleksitasnya.',
        ],
        [
            'kode' => 'SI-251-4012',
            'nama' => 'Pemrograman Lanjut',
            'sks' => 3,
            'dosen' => 'Ir. Siti Aminah, M.T.',
            'deskripsi' => 'Konsep pemrograman berorientasi objek (OOP) menggunakan PHP, meliputi class, inheritance, interface, dan design pattern dasar.',
        ],
        [
            'kode' => 'SI-251-4020',
            'nama' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'dosen' => 'Dr. Ahmad Fauzi, M.Sc',
            'deskripsi' => 'Proses pengembangan perangkat lunak mulai dari requirement engineering, desain, implementasi, hingga pengujian.',
        ],
        [
            'kode' => 'SI-251-4030',
            'nama' => 'Keamanan Sistem Informasi',
            'sks' => 3,
            'dosen' => 'M. Rizky Pratama, S.Kom., M.T.',
            'deskripsi' => 'Prinsip keamanan informasi (CIA Triad), audit keamanan, dan penerapan standar seperti ISO 27002 dan Indeks KAMI.',
        ],
    ];

    public function index(): View
    {
        return view('courses.index', [
            'courses' => $this->courses,
        ]);
    }

    public function show(string $kode): View
    {
        $course = collect($this->courses)->firstWhere('kode', $kode);

        abort_if(is_null($course), 404);

        return view('courses.show', [
            'course' => $course,
        ]);
    }
}