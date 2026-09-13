<x-layout title="Daftar Mata Kuliah">
    <h1 class="text-2xl font-bold mb-6">Daftar Mata Kuliah</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-slate-100 text-sm uppercase text-gray-600">
                <tr>
                    <th class="px-4 py-3">Kode</th>
                    <th class="px-4 py-3">Nama Mata Kuliah</th>
                    <th class="px-4 py-3">SKS</th>
                    <th class="px-4 py-3">Dosen</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($courses as $course)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3 font-mono text-sm">{{ $course['kode'] }}</td>
                        <td class="px-4 py-3">{{ $course['nama'] }}</td>
                        <td class="px-4 py-3">{{ $course['sks'] }}</td>
                        <td class="px-4 py-3">{{ $course['dosen'] }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ route('courses.show', $course['kode']) }}"
                               class="text-blue-600 hover:underline">
                                Detail
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-400">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>