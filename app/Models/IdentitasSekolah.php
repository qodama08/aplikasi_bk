<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class IdentitasSekolah extends Model
{
use HasFactory;
protected $table = 'identitas_sekolah';
protected $fillable = ['nama_sekolah','npsn','alamat','kepala_sekolah','visi','misi','kontak','website'];


public function agenda() { return $this->hasMany(Agenda::class,'sekolah_id'); }
}