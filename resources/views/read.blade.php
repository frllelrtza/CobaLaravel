<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+2zDW1eqzCBv5n0a2j4e0k2cXJ5whXfj9o0J7W9oq6H8e7AnjzvKlG2Jzg4+R0kX" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->prodi }}</td>
                <td>{{ $mahasiswa->fakultas }}</td>
                <td>{{ $mahasiswa->kelamin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-+2zDW1eqzCBv5n0a2j4e0k2cXJ5whXfj9o0J7W9oq6H8e7AnjzvKlG2Jzg4+R0kX" crossorigin="anonymous"></script>
</body>
</html>
