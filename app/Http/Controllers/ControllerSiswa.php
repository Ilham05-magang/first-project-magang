<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

class ControllerSiswa extends Controller
{
    public function index()
    {
        //pengambilan data siswa
        $siswas = DataSiswa::all();
        $title = 'Data Siswa';

        //menampilkan viewnya dan mengirimkan data
        return view('Home', compact('siswas', 'title'));
    }
    public function create(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'sekolah' => 'required|string|max:255',
            'keterangan' => 'nullable|string', // Use 'nullable|string' instead of 'nullable|text'
        ]);

        // Membuat data baru di database
        DataSiswa::create([
            'nama' => $validated['nama'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'sekolah' => $validated['sekolah'],
            'keterangan' => $validated['keterangan'],
        ]);

        // Redirect ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'sekolah' => 'required|string|max:255',
            'keterangan' => 'nullable|string', // Use 'nullable|string' instead of 'nullable|text'
        ]);

        // mencari data yang ingin diupdate
        $siswa = DataSiswa::findOrFail($id);

        // Update data di database
        $siswa->update([
            'nama' => $validated['nama'],
            'tempat_lahir' => $validated['tempat_lahir'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'sekolah' => $validated['sekolah'],
            'keterangan' => $validated['keterangan'],
        ]);

        // Redirect ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data siswa berhasil diperbarui.');
    }
    public function delete($id)
    {
        // mencari data yang ingin dihapus
        $siswa = DataSiswa::findOrFail($id);
        // Hapus data dari database
        $siswa->delete();
        // Redirect ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari data siswa berdasarkan nama, sekolah, atau tempat lahir
        $siswas = DataSiswa::where('nama', 'LIKE', '%' . $query . '%')
                        ->orWhere('sekolah', 'LIKE', '%' . $query . '%')
                        ->orWhere('tempat_lahir', 'LIKE', '%' . $query . '%')
                        ->get();

        $title = 'Hasil Pencarian';

        // Tampilkan hasil pencarian di view
        return view('search', compact('siswas', 'title'));
    }

}
