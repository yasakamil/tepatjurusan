<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->string('banner_media')->nullable(); // image / video

            $table->enum('location_type', ['online', 'offline']);
            $table->string('location_detail')->nullable();

            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');

            $table->decimal('price', 12, 2)->default(0);
            $table->integer('quota')->default(0);

            $table->enum('status', ['draft', 'published', 'closed'])->default('draft');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
