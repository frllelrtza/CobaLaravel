@extends('layouts.app')

@section('content')

<div class="container ">
    <h1 class="text-center">Input Data Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <div class="row mt-5 ">
        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
            <input class="form-control col" type="text" id="nim" name="nim" required>
            <label class="form-label" for="nim">NIM:</label>
        </div>
        </div>
        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
            <input class="form-control" type="text" id="nama" name="nama" required>
            <label class="form-label" for="nama">Nama:</label>
        </div>
    </div>
        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="prodi" name="prodi" required>
                <label class="form-label" for="prodi">Prodi:</label>
            </div>
        </div>
        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="fakultas" name="fakultas" required>
                <label class="form-label" for="fakultas">Fakultas:</label>
            </div>
        </div>


        <div class="col-6 mb-3">
            <div class="form-floating mb-3">
                <select class="form-control" name="kelamin" id="kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                <label class="form-label" for="kelamin">Kelamin:</label>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success  px-3 py-2 ">Simpan Data</button>
                </div>
        </div>
    </div>
    </form>
</div>
    @endsection
