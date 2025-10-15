<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LogPelanggaran extends Model
{
use HasFactory;
protected $table = 'log_pelanggaran';
protected $fillable = ['siswa_id','pelanggaran_id','tanggal','keterangan','guru_bk_id','status'];


public function siswa()
{
return $this->belongsTo(Siswa::class, 'siswa_id');
}


public function pelanggaran()
{
return $this->belongsTo(Pelanggaran::class, 'pelanggaran_id');
}


public function guru()
{
return $this->belongsTo(User::class, 'guru_bk_id');
}
}