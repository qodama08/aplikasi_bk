<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('laporan', function (Blueprint $table) {
$table->id();
$table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
$table->enum('jenis', ['pelanggaran','konseling','perkembangan','prestasi']);
$table->string('periode')->nullable();
$table->string('file_url')->nullable();
$table->foreignId('dibuat_oleh')->constrained('users')->cascadeOnDelete();
$table->timestamp('created_at')->useCurrent();
});
}


public function down(): void
{
Schema::dropIfExists('laporan');
}
};