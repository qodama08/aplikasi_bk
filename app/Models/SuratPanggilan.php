<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SuratPanggilan extends Model
{
use HasFactory;
protected $table = 'surat_panggilan';
protected $fillable = ['siswa_id','guru_bk_id','tanggal','alasan','status','file_url'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
public function guru() { return $this->belongsTo(User::class,'guru_bk_id'); }
}