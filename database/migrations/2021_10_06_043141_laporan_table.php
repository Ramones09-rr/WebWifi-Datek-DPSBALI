<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('notik');
            $table->string('assign');
            $table->string('nama');
            $table->string('site')->nullable();
            $table->string('snap')->nullable();
            $table->string('snont')->nullable();
            $table->string('cp');
            $table->string('st');
            $table->string('lokasi');
            $table->string('status')->nullable();
            $table->string('ttt');
            $table->string('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
