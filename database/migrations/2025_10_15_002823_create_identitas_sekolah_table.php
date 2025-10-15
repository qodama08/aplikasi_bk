<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('identitas_sekolah', function (Blueprint $table) {
$table->id();
$table->string('nama_sekolah');
$table->string('npsn')->unique();
$table->text('alamat')->nullable();
$table->string('kepala_sekolah')->nullable();
$table->text('visi')->nullable();
$table->text('misi')->nullable();
$table->string('kontak')->nullable();
$table->string('website')->nullable();
$table->timestamps();
});
}


public function down(): void
{
Schema::dropIfExists('identitas_sekolah');
}
};