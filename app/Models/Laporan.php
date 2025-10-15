<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Laporan extends Model
{
use HasFactory;
protected $table = 'laporan';
protected $fillable = ['siswa_id','jenis','periode','file_url','dibuat_oleh','created_at'];


public function siswa() { return $this->belongsTo(Siswa::class,'siswa_id'); }
public function pembuat() { return $this->belongsTo(User::class,'dibuat_oleh'); }
}