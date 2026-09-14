<x-layout title="Edit Pengguna">
    <h1>Edit Pengguna: {{ $user->name }}</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Nama Lengkap:</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </p>
        <p>
            <label>Password (Kosongkan jika tidak ingin diubah):</label><br>
            <input type="password" name="password">
        </p>
        <p>
            <label>Role:</label><br>
            <select name="role" required>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="dosen" {{ old('role', $user->role) == 'dosen' ? 'selected' : '' }}>Dosen</option>
                <option value="mahasiswa" {{ old('role', $user->role) == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
            </select>
        </p>
        <p>
            <button type="submit">Update</button>
            <a href="{{ route('users.index') }}">Batal</a>
        </p>
    </form>
</x-layout>