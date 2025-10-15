<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CatatanKonseling extends Model
{
use HasFactory;
protected $table = 'catatan_konseling';
protected $fillable = ['jadwal_id','siswa_id','guru_bk_id','hasil','tindak_lanjut','evaluasi','created_at'];


public function jadwal() { return $this->belongsTo(JadwalKonseling::class,'jadwal_id'); }
public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
public function guru() { return $this->belongsTo(User::class,'guru_bk_id'); }
}