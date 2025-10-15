<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
use HasFactory;


protected $table = 'siswa';


protected $fillable = [
'nisn','nama','kelas_id','jurusan_id','absen','umur','nomor_hp','alamat',
'nama_ayah','nama_ibu','nama_wali','hubungan_wali','nomor_hp_wali'
];


public function kelas()
{
return $this->belongsTo(Kelas::class, 'kelas_id');
}


public function jurusan()
{
return $this->belongsTo(Jurusan::class, 'jurusan_id');
}


public function pelanggaranLogs()
{
return $this->hasMany(LogPelanggaran::class, 'siswa_id');
}


public function prestasi()
{
return $this->hasMany(Prestasi::class, 'siswa_id');
}
}