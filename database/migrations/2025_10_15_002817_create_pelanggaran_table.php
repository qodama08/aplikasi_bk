<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('pelanggaran', function (Blueprint $table) {
$table->id();
$table->string('nama_pelanggaran');
$table->integer('poin');
$table->enum('tingkat_warna', ['hijau','kuning','merah'])->default('hijau');
$table->string('opsi_pengawasan')->nullable();
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('pelanggaran');
}
};