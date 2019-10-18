<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAtInKategoriBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_berita', function (Blueprint $table) {
            $table->SoftDeletes();
        });

        Schema::table('berita', function (Blueprint $table) {
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_berita', function (Blueprint $table) {
            $table->dropSoftdeletes();
        });

         Schema::table('berita', function (Blueprint $table) {
            $table->dropSoftdeletes();
        });
    }
}
