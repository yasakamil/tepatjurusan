<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('account_registration_event', function (Blueprint $table) {
        $table->id();
        
        // Kunci ke tabel account_registrations
        $table->foreignId('account_registration_id')
              ->constrained('account_registrations')
              ->cascadeOnDelete();
              
        // Kunci ke tabel events
        $table->foreignId('event_id')
              ->constrained('events')
              ->cascadeOnDelete();

        // Status pembayaran spesifik untuk event ini
        $table->string('payment_status')->default('pending'); // paid, pending
        $table->dateTime('paid_at')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_registration_event');
    }
};
