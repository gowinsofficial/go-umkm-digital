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
        Schema::create('kuliner_madura', function (Blueprint $table) {
            $table->id('id_kuliner');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_img');
            $table->enum('kategori', ['makanan','snack','minuman']);
            $table->string('nama', 255);
            $table->string('outline', 50)->nullable();
            $table->string('resto', 255);
            $table->string('link_resto', 255)->nullable();
            $table->string('harga', 50)->nullable();
            $table->string('rating', 255)->nullable();
            $table->text('detail')->nullable();
            $table->string('whatsapp_umkm', 255);
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menus')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('batik_madura', function (Blueprint $table) {
            $table->id('id_batik');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_img');
            $table->string('nama', 255);
            $table->string('motif', 100)->nullable();
            $table->string('corak', 100)->nullable();
            $table->string('harga', 50)->nullable();
            $table->string('rating', 50)->nullable();
            $table->text('detail')->nullable();
            $table->string('whatsapp_umkm', 255);
            $table->string('maps', 255);
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menus')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('madura_tv', function (Blueprint $table) {
            $table->id('id_tv');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_img');
            $table->enum('kategori', ['budaya madura', 'acara madura', 'podcast', 'profil video umkm']);
            $table->string('nama', 255);
            $table->text('detail')->nullable();
            $table->string('direct_link', 255);
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menus')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('pariwisata', function (Blueprint $table) {
            $table->id('id_pariwisata');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_img');
            $table->string('nama', 255);
            $table->string('lokasi', 255);
            $table->string('maps', 255)->nullable();
            $table->string('rating', 50)->nullable();
            $table->text('detail')->nullable();
            $table->string('whatsapp_to', 255);
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menus')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('ojol_madura', function (Blueprint $table) {
            $table->id('id_ojol');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_img');
            $table->string('nama', 255);
            $table->text('detail')->nullable();
            $table->string('whatsapp_to', 255);
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menus')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id('id_service');
            $table->enum('group', ['website', 'ecommerce']);
            $table->enum('sub_group', ['website', 'shopee', 'tiktok', 'tokopedia', 'lazada']);
            $table->string('template_wa', 255);
            $table->timestamps();
        });

        Schema::create('eventship', function (Blueprint $table) {
            $table->id('id_event');
            $table->unsignedBigInteger('id_img');
            $table->string('title', 255);
            $table->date('tgl_event');
            $table->enum('direct_wa', ['Y', 'N']);
            $table->string('destination_url', 255);
            $table->timestamps();
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('bazar', function (Blueprint $table) {
            $table->id('id_bazar');
            $table->unsignedBigInteger('id_img');
            $table->string('title', 255);
            $table->date('tgl_acara');
            $table->string('destination_url', 255);
            $table->timestamps();
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('post_articles', function (Blueprint $table) {
            $table->id('id_article');
            $table->unsignedBigInteger('id_img');
            $table->string('header', 255);
            $table->datetime('tgl_post');
            $table->string('writer', 255);
            $table->text('content');
            $table->string('file_upload', 255);
            $table->timestamps();
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });

        Schema::create('mountly_sale', function (Blueprint $table) {
            $table->id('id_sale');
            $table->unsignedBigInteger('id_img');
            $table->enum('kategori', ['kuliner madura', 'batik madura']);
            $table->string('nama_produk', 255);
            $table->integer('harga_awal');
            $table->integer('diskon');
            $table->text('detail');
            $table->timestamps();
            $table->foreign('id_img')->references('id_img')->on('images')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mountly_sale');
        Schema::dropIfExists('post_articles');
        Schema::dropIfExists('bazar');
        Schema::dropIfExists('eventship');
        Schema::dropIfExists('services');
        Schema::dropIfExists('ojol_madura');
        Schema::dropIfExists('pariwisata');
        Schema::dropIfExists('madura_tv');
        Schema::dropIfExists('batik_madura');
        Schema::dropIfExists('kuliner_madura');
    }
};
