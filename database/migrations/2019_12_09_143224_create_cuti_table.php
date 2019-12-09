<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('jenis', ['Cuti Sakit','Cuti Tahunan','Cuti Harian','Cuti Bulanan']);
            $table->date('tgl_pengajuan');
            $table->integer('hari');
            $table->enum('status',['ditolak','disetujui','menunggu']);
            
            $table->integer('pegawai_id');

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
        Schema::dropIfExists('cutis');
    }
}
