<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
public function up(): void
{
Schema::create('notifikasi', function (Blueprint $table) {
$table->id();
$table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
$table->string('judul');
$table->text('pesan')->nullable();
$table->enum('tipe', ['email','whatsapp','sistem'])->default('sistem');
$table->enum('status', ['terkirim','gagal','pending'])->default('pending');
$table->timestamp('created_at')->useCurrent();
$table->timestamp('sent_at')->nullable();
$table->timestamp('read_at')->nullable();
});
}


public function down(): void
{
Schema::dropIfExists('notifikasi');
}
};