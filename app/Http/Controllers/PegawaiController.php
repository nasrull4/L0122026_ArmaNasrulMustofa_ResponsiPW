<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    // Menampilkan form untuk membuat pegawai baru
    public function create()
    {
        return view('pegawai.create');
    }

    // Menyimpan pegawai baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $pegawai = Pegawai::create($validatedData);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan detail pegawai berdasarkan ID
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    // Menampilkan form untuk mengedit data pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    // Memperbarui data pegawai berdasarkan ID
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($validatedData);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus pegawai berdasarkan ID
    public function destroy($id)
    {
        Pegawai::destroy($id);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
