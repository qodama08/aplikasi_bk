<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pelanggaran extends Model
{
use HasFactory;
protected $table = 'pelanggaran';
protected $fillable = ['nama_pelanggaran','poin','tingkat_warna','opsi_pengawasan'];


public function logs()
{
return $this->hasMany(LogPelanggaran::class, 'pelanggaran_id');
}
}