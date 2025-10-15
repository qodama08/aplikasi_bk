<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ArsipDokumen extends Model
{
use HasFactory;
protected $table = 'arsip_dokumen';
protected $fillable = ['siswa_id','jenis','judul','file_url','uploaded_at'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
}