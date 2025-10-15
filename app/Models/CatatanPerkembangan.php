<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CatatanPerkembangan extends Model
{
use HasFactory;
protected $table = 'catatan_perkembangan';
protected $fillable = ['siswa_id','guru_bk_id','tanggal','deskripsi','kategori','target','evaluasi'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
public function guru() { return $this->belongsTo(User::class,'guru_bk_id'); }
}