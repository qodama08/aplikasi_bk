<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('surat_panggilan', function (Blueprint $table) {
$table->id();
$table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
$table->foreignId('guru_bk_id')->constrained('users')->cascadeOnDelete();
$table->date('tanggal');
$table->text('alasan');
$table->enum('status', ['terkirim','hadir','tidak_hadir'])->default('terkirim');
$table->string('file_url')->nullable();
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('surat_panggilan');
}
};