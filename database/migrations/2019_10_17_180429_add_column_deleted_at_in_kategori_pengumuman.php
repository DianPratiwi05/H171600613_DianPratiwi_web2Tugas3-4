<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAtInKategoriPengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->Softdeletes();
        });

        Schema::table('pengumuman', function (Blueprint $table) {
            $table->Softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->dropSoftdeletes();
        });

         Schema::table('pengumuman', function (Blueprint $table) {
            $table->dropSoftdeletes();
        });
    }
}
