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
        Schema::create('admin_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identity_number');
            $table->date('operations_date');
            $table->double('commission_amount', 5, 2)->nullable()->default('0.00');
            $table->double('current_balance', 15, 2)->nullable()->default('0.00');
            $table->string('currency')->default('USD');
            $table->string('created_by')->default('Admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_accounts');
    }
};
