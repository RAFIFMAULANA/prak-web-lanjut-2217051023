<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e2e2e;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #ddd;
        }

        h1 {
            color: #fff;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            color: #333;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f4f4f9;
            color: #333;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
<div>
<h1>Buat Profile Anda</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

        <p class="text-muted">Silakan masukkan nama lengkap Anda.</p>
        <br>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" value="{{ old('npm') }}" required>

        <p class="text-muted">Silahkan masukan NPM anda.</p>
        <br>

        <label for="kelas">Kelas:</label>
        <select id="kelas" name="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <p class="text-muted">Pilih kelas yang sesuai.</p>
        <br>

        <button type="submit">Submit</button>

    </form>
</div>
@endsection

</html>