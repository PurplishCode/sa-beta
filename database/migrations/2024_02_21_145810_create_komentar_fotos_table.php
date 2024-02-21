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
        Schema::create('komentar_foto', function (Blueprint $table) {
            $table->id("komentar_id");
          
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("foto_id");
            
            $table->foreign("user_id")->references("id")->on("users");
            
            $table->foreign("foto_id")->references("id")->on("foto");
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_fotos');
    }
};
