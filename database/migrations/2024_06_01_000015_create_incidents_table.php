<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('powerplant_id')->constrained('powerplants');
            $table->foreignId('reported_by')->constrained('users');
            $table->foreignId('assigned_to')->constrained('users');
            $table->string('type', 100);
            $table->string('priority', 20);
            $table->string('status', 20);
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
