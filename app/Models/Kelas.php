<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kelas extends Model
{
use HasFactory;


protected $table = 'kelas';
protected $fillable = ['nama_kelas','tingkat','wali_kelas_id','tahun_ajaran'];


public function wali()
{
return $this->belongsTo(User::class, 'wali_kelas_id');
}


public function siswa()
{
return $this->hasMany(Siswa::class, 'kelas_id');
}
}
