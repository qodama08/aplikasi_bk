<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Agenda extends Model
{
use HasFactory;
protected $table = 'agenda';
protected $fillable = ['sekolah_id','judul','deskripsi','tanggal','jam','lokasi','penyelenggara'];


public function sekolah() { return $this->belongsTo(IdentitasSekolah::class,'sekolah_id'); }
}