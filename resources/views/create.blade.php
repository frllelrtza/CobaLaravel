<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>

<form action="/mahasiswa" method="GET">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM:</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi:</label>
        <input type="text" class="form-control" id="prodi" name="prodi" required>
    </div>
    <div class="mb-3">
        <label for="fakultas" class="form-label">Fakultas:</label>
        <input type="text" class="form-control" id="fakultas" name="fakultas" required>
    </div>
    <div class="mb-3">
        <label for="kelamin" class="form-label">Jenis Kelamin:</label>
        <select class="form-select" id="kelamin" name="kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button></form>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-+2zDW1eqzCBv5n0a2j4e0k2cXJ5whXfj9o0J7W9oq6H8e7AnjzvKlG2Jzg4+R0kX" crossorigin="anonymous"></script>
</body>
</html>
