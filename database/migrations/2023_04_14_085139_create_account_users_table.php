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
        Schema::create('account_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identity_number')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('street');
            $table->string('state');
            $table->string('postCode');
            $table->string('country');
            $table->string('profession')->nullable();
            $table->date('date_of_birth');
            $table->string('account_type');
            $table->string('pinCode')->nullable();
            $table->double('balance', 15, 2)->default('0.00');
            $table->string('currency')->default('USD');
            $table->string('status')->default('Active');
            $table->string('created_by')->default('Admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_users');
    }
};
