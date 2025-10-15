<?php
namespace App\Http\Controllers;


use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
public function index()
{
$siswa = Siswa::with(['kelas','jurusan'])->paginate(15);
return view('siswa.index', compact('siswa'));
}

public function create()
{
$kelas = Kelas::all();
$jurusan = Jurusan::all();
return view('siswa.create', compact('kelas','jurusan'));
}


public function store(Request $request)
{
$validated = $request->validate([
'nisn' => 'required|unique:siswa,nisn',
'nama' => 'required',
]);


Siswa::create($validated + $request->only(['kelas_id','jurusan_id','absen','umur','nomor_hp','alamat','nama_ayah','nama_ibu','nama_wali','hubungan_wali','nomor_hp_wali']));


return redirect()->route('siswa.index')->with('success','Siswa berhasil ditambahkan');
}


public function edit(Siswa $siswa)
{
$kelas = Kelas::all();
$jurusan = Jurusan::all();
return view('siswa.edit', compact('siswa','kelas','jurusan'));
}


public function update(Request $request, Siswa $siswa)
{
$validated = $request->validate([
'nisn' => 'required|unique:siswa,nisn,' . $siswa->id,
'nama' => 'required',
]);


$siswa->update($validated + $request->only(['kelas_id','jurusan_id','absen','umur','nomor_hp','alamat','nama_ayah','nama_ibu','nama_wali','hubungan_wali','nomor_hp_wali']));


return redirect()->route('siswa.index')->with('success','Siswa berhasil diperbarui');
}


public function destroy(Siswa $siswa)
{
$siswa->delete();
return back()->with('success','Siswa dihapus');
}
}