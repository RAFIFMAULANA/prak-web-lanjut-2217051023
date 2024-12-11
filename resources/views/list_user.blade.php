<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .user-table {
            margin-top: 20px;
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('users.create') }}" class="btn-custom">Tambah Pengguna Baru</a>
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td><a href="{{route('users.show', $user->id)}}" class="btn btn-warning mb-3">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .user-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .user-table th,
    .user-table td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: left;
    }

    .user-table th {
        background-color: #007bff;
        color: white;
        text-transform: uppercase;
    }

    .user-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .user-table tr:hover {
        background-color: #ddd;
    }

    @media screen and (max-width: 768px) {

        .user-table th,
        .user-table td {
            padding: 10px;
            font-size: 14px;
        }
    }
</style>
@endsection

</html>