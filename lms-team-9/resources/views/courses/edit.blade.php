<x-layout title="Edit Mata Kuliah">
    <h1>Edit Mata Kuliah: {{ $course->name }}</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Kode Mata Kuliah:</label><br>
            <input type="text" name="code" value="{{ old('code', $course->code) }}" required>
        </p>
        <p>
            <label>Nama Mata Kuliah:</label><br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}" required>
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="description">{{ old('description', $course->description) }}</textarea>
        </p>
        <p>
            <label>SKS:</label><br>
            <input type="number" name="sks" min="1" max="6" value="{{ old('sks', $course->sks) }}" required>
        </p>
        <p>
            <label>Dosen Pengampu:</label><br>
            <select name="lecturer_id" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach ($lecturers as $lecturer)
                    <option value="{{ $lecturer->id }}" {{ old('lecturer_id', $course->lecturer_id) == $lecturer->id ? 'selected' : '' }}>
                        {{ $lecturer->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Status:</label><br>
            <select name="status" required>
                <option value="draft" {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="active" {{ old('status', $course->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="archived" {{ old('status', $course->status) == 'archived' ? 'selected' : '' }}>Archived</option>
            </select>
        </p>
        <p>
            <button type="submit">Update</button>
            <a href="{{ route('courses.index') }}">Batal</a>
        </p>
    </form>
</x-layout>