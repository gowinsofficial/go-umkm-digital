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
        Schema::create('batik_madura', function (Blueprint $table) {
            $table->integer('id_batik');
            $table->integer('id_menu');
            $table->integer('id_img');
            $table->string('nama');
            $table->string('motif');
            $table->string('corak');
            $table->string('harga');
            $table->string('rating');
            $table->text('detail');
            $table->string('whatsapp_umkm');
            $table->timestamp('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batik_madura');
    }
};
