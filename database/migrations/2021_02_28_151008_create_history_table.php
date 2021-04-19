<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('noDraft');
            $table->string('nrb');
            $table->string('admin_nik');
            $table->timestamp('admin_create');
            $table->string('ekspedisi_process_nik')->nullable();
            $table->timestamp('ekspedisi_process_create')->nullable();
            $table->string('ekspedisi_to_retur_nik')->nullable();
            $table->timestamp('ekspedisi_to_retur_create')->nullable();
            $table->string('retur_check_nik')->nullable();
            $table->timestamp('retur_check_create')->nullable();
            $table->string('admin_gudang_check_nik')->nullable();
            $table->timestamp('admin_gudang_check_create')->nullable();
            $table->string('admin_cross_check_nik')->nullable();
            $table->timestamp('admin_cross_check_create')->nullable();
            $table->integer('admin_cross_check_status')->nullable();
            $table->longtext('admin_cross_check_keterangan')->nullable();
            $table->string('admin_fa_cn_nik')->nullable();
            $table->timestamp('admin_fa_cn_create')->nullable();
            $table->longtext('keterangan')->nullable();
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
        Schema::dropIfExists('history');
    }
}
