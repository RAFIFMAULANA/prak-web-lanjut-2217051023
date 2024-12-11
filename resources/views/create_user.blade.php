<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Halaman Create User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" name="npm" id="npm" required><br><br>

        <label for="id_kelas">Kelas:</label><br>
        <select name="kelas_id" id="id_kelas" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
