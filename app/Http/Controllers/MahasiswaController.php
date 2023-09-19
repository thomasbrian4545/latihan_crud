<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // return "Tabel mahasiswa ada disini";
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view('form-pendaftaran');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nim' => 'required|size:8',
                'nama' => 'required|min:3|max:50',
                'jenis_kelamin' => 'required|in:P,L',
                'jurusan' => 'required',
                'alamat' => '',
            ]
        );
        // dump($validateData);
        Mahasiswa::create($validateData);
        return "Data berhasil diinput ke database";
    }

    public function show($mahasiswa)
    {
        // dd($mahasiswa);
        $result = Mahasiswa::findOrFail($mahasiswa);
        return view('mahasiswa.show', ['mahasiswa' => $result]);
    // public function show($mahasiswa)
    }
}
