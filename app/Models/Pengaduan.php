<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengaduan extends Model
{
use HasFactory;
protected $table = 'pengaduan';
protected $fillable = ['siswa_id','judul','isi','status','created_at'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
}