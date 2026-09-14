<x-layout title="Tambah Pengguna">
    <h1>Tambah Pengguna Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama Lengkap:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </p>
        <p>
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </p>
        <p>
            <label>Role:</label><br>
            <select name="role" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="dosen" {{ old('role') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                <option value="mahasiswa" {{ old('role') == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
            </select>
        </p>
        <p>
            <button type="submit">Simpan</button>
            <a href="{{ route('users.index') }}">Batal</a>
        </p>
    </form>
</x-layout>