<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('catatan_perkembangan', function (Blueprint $table) {
$table->id();
$table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
$table->foreignId('guru_bk_id')->constrained('users')->cascadeOnDelete();
$table->date('tanggal');
$table->text('deskripsi')->nullable();
$table->enum('kategori', ['akademik','sikap','sosial','prestasi'])->nullable();
$table->text('target')->nullable();
$table->text('evaluasi')->nullable();
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('catatan_perkembangan');
}
};