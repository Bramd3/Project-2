<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('maintenancetasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('powerplant_id')->constrained('powerplants');
            $table->foreignId('assigned_to')->constrained('users');
            $table->string('title', 150);
            $table->text('description');
            $table->date('scheduled_date');
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('maintenancetasks');
    }
};
