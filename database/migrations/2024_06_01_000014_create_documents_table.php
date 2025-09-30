<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('powerplant_id')->constrained('powerplants');
            $table->string('title', 150);
            $table->string('file_path', 255);
            $table->foreignId('uploaded_by')->constrained('users');
            $table->timestamp('uploaded_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
