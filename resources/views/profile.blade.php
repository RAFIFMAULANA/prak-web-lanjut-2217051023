<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex; 
            justify-content: center;  
            align-items: center;
            height: 100vh; 
            margin: 0;
            background-color: #f4f4f4;
        }    
        .profile-container { 
            text-align: center; 
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }  
        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 2px solid #ddd;
        }
        .profile-container .info {
            background-color: #e0e0e0;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="https://via.placeholder.com/100" alt="Profile Picture">
        <div class="info">Nama: {{ $nama }}</div>
        <div class="info">Kelas: {{ $kelas }}</div>
        <div class="info">NPM: {{ $npm }}</div>
    </div>
</body>
</html>
