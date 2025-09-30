<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('powerplants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('type', 50);
            $table->string('location', 200);
            $table->decimal('capacity_mw', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('powerplants');
    }
};
