<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('siswa', function (Blueprint $table) {
$table->id();
$table->string('nisn')->unique();
$table->string('nama');
$table->foreignId('kelas_id')->nullable()->constrained('kelas')->nullOnDelete();
$table->foreignId('jurusan_id')->nullable()->constrained('jurusan')->nullOnDelete();
$table->integer('absen')->nullable();
$table->integer('umur')->nullable();
$table->string('nomor_hp')->nullable();
$table->text('alamat')->nullable();


$table->string('nama_ayah')->nullable();
$table->string('nama_ibu')->nullable();
$table->string('nama_wali')->nullable();
$table->enum('hubungan_wali', ['ayah','ibu','wali'])->nullable();
$table->string('nomor_hp_wali')->nullable();


$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('siswa');
}
};