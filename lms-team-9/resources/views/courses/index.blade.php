<x-layout title="Daftar Mata Kuliah">
    <div style="margin-bottom: 1rem;">
        <h1>Daftar Mata Kuliah</h1>
        <a href="{{ route('courses.create') }}">+ Tambah Mata Kuliah</a>
    </div>

    @if (session('success'))
        <div style="color: green; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen Pengampu</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a>
                    </td>
                    <td>{{ $course->sks }}</td>
                    <td>{{ $course->lecturer ? $course->lecturer->name : 'Belum Ditentukan' }}</td>
                    <td>{{ ucfirst($course->status) }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course) }}">Edit</a>
                        |
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-layout>