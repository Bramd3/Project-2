<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained('users');
            $table->string('title', 200);
            $table->text('content');
            $table->timestamp('generated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
