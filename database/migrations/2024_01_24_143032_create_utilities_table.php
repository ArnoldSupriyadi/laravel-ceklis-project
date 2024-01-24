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
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('pic_pagi');
            $table->string('pic_malam')->nullable();
            $table->string('jam_input_pagi');
            $table->string('jam_input_malam')->nullable();
            $table->unsignedBigInteger('pagi');
            $table->unsignedBigInteger('malam')->nullable();
            $table->unsignedBigInteger('pemakaian')->nullable();
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilities');
    }
};
