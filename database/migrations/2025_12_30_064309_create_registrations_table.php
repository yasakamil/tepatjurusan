<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');

            $table->string('no_hp');
            $table->string('no_hp_orangtua');

            $table->string('email');

            $table->text('alamat_domisili');
            $table->string('asal_sekolah');
            $table->string('kelas_jenjang');

            // Jurusan (langsung string)
            $table->string('jurusan_1');
            $table->string('jurusan_2');
            $table->string('jurusan_3');
            $table->string('jurusan_4')->nullable();
            $table->string('jurusan_5')->nullable();

            // Universitas (langsung string)
            $table->string('universitas_1');
            $table->string('universitas_2');
            $table->string('universitas_3');
            $table->string('universitas_4')->nullable();
            $table->string('universitas_5')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
