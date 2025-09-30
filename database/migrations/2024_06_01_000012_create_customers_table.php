<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('company_name', 150);
            $table->string('contract_number', 100);
            $table->string('phone', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
