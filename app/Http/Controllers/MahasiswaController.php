<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {

        $mahasiswas = Mahasiswa::all();
        return view('read', compact('mahasiswas'));
    }

    public function create()
    {
        return view('create');
}

    public function store(Request $request)
    {

        Mahasiswa::create($request->all());
        return redirect()->route('index');
    }
}
