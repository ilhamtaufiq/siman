<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_makam', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'khonghucu']);
            $table->string('pekerjaan')->nullable();
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->foreignId('ahliwaris_id')->constrained('tbl_ahliwaris')->cascadeOnDelete();
            $table->string('hubungan')->nullable();
            $table->date('tanggal_meninggal');
            $table->date('tanggal_dimakamkan');
            $table->foreignId('tpu_id')->constrained('tbl_tpu')->cascadeOnDelete();
            $table->string('blok');
            $table->integer('nomor');
            $table->double('luas');
            $table->string('foto')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_makam');
    }
};
