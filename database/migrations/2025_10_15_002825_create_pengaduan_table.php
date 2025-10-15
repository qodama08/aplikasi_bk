<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('pengaduan', function (Blueprint $table) {
$table->id();
$table->foreignId('siswa_id')->constrained('siswa')->cascadeOnDelete();
$table->string('judul');
$table->text('isi');
$table->enum('status', ['terkirim','diproses','selesai'])->default('terkirim');
$table->timestamp('created_at')->useCurrent();
});
}


public function down(): void
{
Schema::dropIfExists('pengaduan');
}
};