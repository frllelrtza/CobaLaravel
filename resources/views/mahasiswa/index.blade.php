@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div class="container">

        <a class="btn btn-warning" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa Baru</a>
        <table class=" table table-bordered border-dark mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <th scope="row">{{ $mahasiswa->id }}</th>
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

        @endsection

