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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('logo_image');
            $table->string('brandName');
            $table->enum('brandSize', ['Petite', 'Moyenne', 'Grande']);
            $table->text('brandDescription');
            $table->string('brandLocalisation');
            $table->foreignId('pack_id')->constrained('packs')->onDelete('cascade');
            $table->foreignId('collaboration_id')->constrained('collaborations')->onDelete('cascade');
            $table->foreignId('sector_id')->constrained('sectors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
