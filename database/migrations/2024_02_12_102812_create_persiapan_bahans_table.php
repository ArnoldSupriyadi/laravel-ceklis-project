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
        Schema::create('persiapan_bahans', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('nama_pic');
            $table->string('kesesuaian_tanggal');
            $table->time('jam_input');
            $table->unsignedBigInteger('crispy_flour');
            $table->unsignedBigInteger('chicken_custom');
            $table->string('bumbu');
            $table->string('paper_bag');
            $table->string('chili');
            $table->string('tusuk_sate');
            $table->unsignedBigInteger('prepare_tempura');
            $table->unsignedBigInteger('prepare_enoki');
            $table->string('addon_enoki');
            $table->unsignedBigInteger('chicken_ricebox');
            $table->unsignedBigInteger('prepare_nasi');
            $table->unsignedBigInteger('saus_ricebox');
            $table->unsignedBigInteger('tofu');
            $table->unsignedBigInteger('telur_pitan');
            $table->string('daun_bawang');
            $table->string('paper_box');
            $table->string('rice_spoon');
            $table->string('sumpit');
            $table->string('tissue');
            $table->unsignedBigInteger('prepare_crepe_skin');
            $table->unsignedBigInteger('saus_crepe');
            $table->unsignedBigInteger('telur_ayam');
            $table->string('minyak_cair');
            $table->string('daun_coriander');
            $table->unsignedBigInteger('prepare_keju');
            $table->unsignedBigInteger('prepare_sosis');
            $table->unsignedBigInteger('prepare_mushroom');
            $table->string('abon_ayam');
            $table->unsignedBigInteger('chicken_popcorn');
            $table->string('tepung_popcorn');
            $table->unsignedBigInteger('porsi');
            $table->string('adonan_butter_mix');
            $table->string('menu');
            $table->string('nama');
            $table->string('ceklis');
            $table->string('keterangan');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persiapan_bahans');
    }
};
