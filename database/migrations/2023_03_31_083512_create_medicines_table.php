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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('disease_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('name', 50);
            $table->string('img', 50);
            $table->text('description');
            $table->string('composition', 100);
            $table->string('dose', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
