<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JadwalKonseling extends Model
{
use HasFactory;
protected $table = 'jadwal_konseling';
protected $fillable = ['siswa_id','guru_bk_id','tanggal','jam','jenis','tempat','status'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
public function guru() { return $this->belongsTo(User::class,'guru_bk_id'); }
}