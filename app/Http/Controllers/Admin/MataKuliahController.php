<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('admin.mata_kuliahs.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('admin.mata_kuliahs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk',
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create($request->only(['kode_mk', 'nama_mk', 'sks']));

        return redirect()->route('admin.mata-kuliahs.index')->with('success', 'Data Mata Kuliah berhasil ditambahkan.');
    }

    public function show(MataKuliah $mataKuliah)
    {
        return view('admin.mata_kuliahs.show', compact('mataKuliah'));
    }

    public function edit(MataKuliah $mataKuliah)
    {
        return view('admin.mata_kuliahs.edit', compact('mataKuliah'));
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,' . $mataKuliah->id,
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mataKuliah->update($request->only(['kode_mk', 'nama_mk', 'sks']));

        return redirect()->route('admin.mata-kuliahs.index')->with('success', 'Data Mata Kuliah berhasil diperbarui.');
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();

        return redirect()->route('admin.mata-kuliahs.index')->with('success', 'Data Mata Kuliah berhasil dihapus.');
    }
}