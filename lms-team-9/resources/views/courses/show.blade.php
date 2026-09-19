<x-layout title="Detail Mata Kuliah">
    <h1>Detail Mata Kuliah</h1>

    <p><strong>Kode:</strong> {{ $course->code }}</p>
    <p><strong>Nama:</strong> {{ $course->name }}</p>
    <p><strong>SKS:</strong> {{ $course->sks }}</p>
    <p><strong>Dosen Pengampu:</strong> {{ $course->lecturer ? $course->lecturer->name : 'Belum Ditentukan' }}</p>
    <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>
    <p><strong>Deskripsi:</strong> {{ $course->description ?? '-' }}</p>

    <p>
        <a href="{{ route('courses.edit', $course) }}">Edit</a> |
        <a href="{{ route('courses.index') }}">Kembali ke Daftar</a>
    </p>
</x-layout>