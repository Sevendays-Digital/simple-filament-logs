<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('simple_filament_logs', function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('by');
            $table->nullableMorphs('about');
            $table->text('log');
            $table->string('severity')->default('log');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('simple_filament_logs');
    }
};
