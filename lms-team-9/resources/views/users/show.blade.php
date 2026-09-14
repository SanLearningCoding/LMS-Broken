<x-layout title="Detail Pengguna">
    <h1>Detail Pengguna</h1>

    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
    <p><strong>Terdaftar Pada:</strong> {{ $user->created_at->format('d M Y H:i') }}</p>

    <p>
        <a href="{{ route('users.edit', $user) }}">Edit</a> |
        <a href="{{ route('users.index') }}">Kembali ke Daftar</a>
    </p>
</x-layout>