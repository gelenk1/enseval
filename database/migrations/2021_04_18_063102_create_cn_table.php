<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('noDraft');
            $table->string('nrb');
            $table->string('cn');
            $table->string('nik');
            $table->integer('idCabang');
            $table->integer('idDevisi');
            $table->integer('idJabatan');
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
        Schema::dropIfExists('cn');
    }
}
