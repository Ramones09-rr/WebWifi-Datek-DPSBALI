<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class oloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olo', function (Blueprint $table) {
            $table->id();
            $table->string('notic');
            $table->string('ts')->nullable();
            $table->string('tc')->nullable();
            $table->string('cust');
            $table->string('nid')->nullable();
            $table->string('sid')->nullable();
            $table->string('xid')->nullable();
            $table->string('jin')->nullable();
            $table->string('bw')->nullable();
            $table->string('alamat')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('nte')->nullable();
            $table->string('type')->nullable();
            $table->string('product')->nullable();
            $table->string('jla')->nullable();
            $table->string('sto')->nullable();
            $table->string('metro')->nullable();
            $table->string('portm')->nullable();
            $table->string('olt')->nullable();
            $table->string('portl')->nullable();
            $table->string('odp')->nullable();
            $table->string('ont')->nullable();
            $table->string('portn')->nullable();
            $table->string('sn')->nullable();
            $table->string('vlan')->nullable();
            $table->string('oa')->nullable();
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
        Schema::dropIfExists('olo');
    }
}
