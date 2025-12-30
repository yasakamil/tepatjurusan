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
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique(); // Buat link SEO friendly
        $table->string('thumbnail')->nullable(); // Foto artikel
        $table->longText('content'); // Isi artikel (buat itung read time)
        $table->date('published_at')->default(now()); // Tanggal tayang
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
