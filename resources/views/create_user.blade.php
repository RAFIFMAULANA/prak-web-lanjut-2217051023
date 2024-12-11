<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Create</title>
</head>
<body>
    <h1>Ini Halaman Create</h1>
    
    <form action="{{ route('user.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm" required><br><br>
        
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
