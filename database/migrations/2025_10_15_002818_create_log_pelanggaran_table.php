<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('log_pelanggaran', function (Blueprint $table) {
$table->id();
$table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
$table->foreignId('pelanggaran_id')->constrained('pelanggaran')->cascadeOnDelete();
$table->date('tanggal');
$table->text('keterangan')->nullable();
$table->foreignId('guru_bk_id')->constrained('users')->cascadeOnDelete();
$table->enum('status', ['open','diproses','selesai'])->default('open');
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('log_pelanggaran');
}
};