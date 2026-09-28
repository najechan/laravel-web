<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{

    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        return "Menampilkan form tambah matakuliah";
    }

    public function store(Request $request)
    {
        return "Menyimpan data matakuliah";
    }

    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }

        return "Masukkan kode matakuliah!";
    }

    public function edit($kode)
    {
        return "Mengedit matakuliah " . $kode;
    }

    public function update(Request $request, $kode)
    {
        return "Memperbarui matakuliah " . $kode;
    }

    public function destroy($kode)
    {
        return "Menghapus matakuliah " . $kode;
    }
}