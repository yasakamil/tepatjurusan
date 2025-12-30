<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // RELATION
            $table->foreignId('account_registration_id')
                ->constrained('account_registrations')
                ->cascadeOnDelete();

            $table->foreignId('event_id')
                ->constrained()
                ->cascadeOnDelete();

            // MIDTRANS DATA
            $table->string('midtrans_order_id')->unique();
            $table->string('payment_type')->nullable();
            $table->decimal('gross_amount', 12, 2);
            $table->string('transaction_status');
            $table->string('fraud_status')->nullable();

            $table->string('snap_token')->nullable();
            $table->string('pdf_url')->nullable();

            $table->dateTime('transaction_time')->nullable();
            $table->dateTime('settlement_time')->nullable();
            $table->dateTime('expiry_time')->nullable();

            $table->string('payment_code')->nullable();
            $table->string('va_number')->nullable();

            // RAW CALLBACK MIDTRANS
            $table->json('raw_response')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
