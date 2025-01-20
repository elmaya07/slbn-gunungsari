<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pengirim
            $table->text('comment'); // Isi komentar
            $table->foreignId('parent_id')->nullable()->constrained('comments')->onDelete('cascade'); // Relasi ke komentar induk
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};