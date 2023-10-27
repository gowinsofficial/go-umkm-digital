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
        $group = ['kuliner-madura','batik-madura','madura-tv','pariwisata','branding-umkm','ojol-madura'];

        Schema::create('menus', function (Blueprint $table) use ($group) {
            $table->id('id_menu');
            $table->enum('group', $group);
            $table->string('nama_menu', 255);
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) use ($group) {
            $table->id('id_img');
            $table->enum('group', $group);
            $table->string('directory', 255);
            $table->string('filename', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('menus');
    }
};
