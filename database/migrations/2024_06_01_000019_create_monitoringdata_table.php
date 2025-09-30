<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('monitoringdata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('powerplant_id')->constrained('powerplants');
            $table->timestamp('timestamp');
            $table->decimal('energy_output_mw', 10, 2);
            $table->decimal('temperature', 5, 2);
            $table->decimal('efficiency', 5, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monitoringdata');
    }
};
