<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datin', function (Blueprint $table) {
            $table->id();
            $table->string('th');
            $table->string('am');
            $table->string('segmen')->nullable();
            $table->string('sub')->nullable();
            $table->string('cust')->nullable();
            $table->string('project')->nullable();
            $table->string('produk')->nullable();
            $table->string('qty')->nullable();
            $table->string('satuan')->nullable();
            $table->string('otc')->nullable();
            $table->string('rec')->nullable();
            $table->string('tk')->nullable();
            $table->string('sca');
            $table->string('jml')->nullable();
            $table->string('bln')->nullable();
            $table->string('bill')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->nullable();
            $table->string('progress')->nullable();
            $table->string('ko')->nullable();
            $table->string('nks')->nullable();
            $table->string('channel')->nullable();
            $table->string('divre');
            $table->string('witel');
            $table->string('mitra')->nullable();
            $table->string('masa')->nullable();
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
        Schema::dropIfExists('datin');
    }
}
