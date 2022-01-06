<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datek', function (Blueprint $table) {
            $table->id();
            $table->string('sn')->nullable();
            $table->string('mac');
            $table->string('sto');
            $table->string('log')->nullable();
            $table->string('ap');
            $table->string('alamat')->nullable();
            $table->string('ont')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('olt')->nullable();
            $table->string('gpon');
            $table->string('onu');
            $table->string('vlan');
            $table->string('status');
            $table->string('odp')->nullable();
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
        Schema::dropIfExists('datek');
    }
}
