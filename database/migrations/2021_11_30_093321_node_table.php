<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node', function (Blueprint $table) {
            $table->id();
            $table->string('sname')->nullable();
            $table->string('sadd')->nullable();
            $table->string('sid');
            $table->string('hsn');
            $table->string('lat');
            $table->string('long');
            $table->string('akses');
            $table->string('system')->nullable();
            $table->string('hsi')->nullable();
            $table->string('dme');
            $table->string('oname');
            $table->string('oport')->nullable();
            $table->string('ptct');
            $table->string('sn');
            $table->string('ont');
            $table->string('v2g')->nullable();
            $table->string('v3g')->nullable();
            $table->string('v4g')->nullable();
            $table->string('portn');
            $table->string('ipo')->nullable();
            $table->string('bwt')->nullable();
            $table->string('oam')->nullable();
            $table->string('odp');
            $table->string('remark')->nullable();
            $table->string('tdes')->nullable();
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
        Schema::dropIfExists('node');
    }
}
