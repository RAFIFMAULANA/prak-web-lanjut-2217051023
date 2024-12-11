@extends('layouts.app') <!-- Menggunakan layout app.blade.php -->

@section('content')
    <h1>Halaman Create User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" name="npm" id="npm" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="id_kelas" class="form-label">Kelas:</label>
            <select name="kelas_id" id="id_kelas" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
