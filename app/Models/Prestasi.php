<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Prestasi extends Model
{
use HasFactory;
protected $table = 'prestasi';
protected $fillable = ['siswa_id','nama_prestasi','tingkat','kategori','tanggal','deskripsi'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
}