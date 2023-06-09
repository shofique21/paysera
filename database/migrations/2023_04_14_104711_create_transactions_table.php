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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identity_number');
            $table->date('operations_date');
            $table->string('account_type');
            $table->string('operation_type');
            $table->double('operation_amount', 15, 2)->nullable()->default('0.00');
            $table->double('commission_amount', 5, 2)->nullable()->default('0.00');
            $table->double('amount_balance', 15, 2)->nullable()->default('0.00');
            $table->string('currency')->default('USD');
            $table->string('status')->nullable()->default('success');
            $table->string('created_by')->default('Admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
