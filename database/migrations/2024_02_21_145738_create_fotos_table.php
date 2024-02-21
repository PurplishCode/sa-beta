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
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
$table->string("judulFoto");
$table->string("deskripsiFoto");

$table->date("tanggalUnggah");

$table->string("lokasiFile");

$table->unsignedBigInteger("user_id");
$table->unsignedBigInteger("album_id");

$table->foreign("user_id")->references("id")->on("users");

$table->foreign("album_id")->references("id")->on("album");

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
