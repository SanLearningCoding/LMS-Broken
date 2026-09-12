<x-layout title="Detail {{ $course['nama'] }}">
    <a href="{{ route('courses.index') }}" class="text-blue-600 hover:underline text-sm">
        &larr; Kembali ke Daftar Mata Kuliah
    </a>

    <div class="bg-white rounded-lg shadow mt-4 p-6">
        <h1 class="text-2xl font-bold mb-1">{{ $course['nama'] }}</h1>
        <p class="text-gray-500 font-mono mb-6">{{ $course['kode'] }}</p>

        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div>
                <dt class="text-sm text-gray-500">SKS</dt>
                <dd class="text-lg font-semibold">{{ $course['sks'] }}</dd>
            </div>
            <div>
                <dt class="text-sm text-gray-500">Dosen Pengampu</dt>
                <dd class="text-lg font-semibold">{{ $course['dosen'] }}</dd>
            </div>
        </dl>

        <div>
            <h2 class="text-sm text-gray-500 mb-1">Deskripsi</h2>
            <p class="text-gray-700 leading-relaxed">{{ $course['deskripsi'] }}</p>
        </div>
    </div>
</x-layout>
