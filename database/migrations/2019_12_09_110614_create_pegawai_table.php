<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nip');
            $table->string('nama', 100);
            $table->string('alamat', 100);
            $table->date('tgl_lahir');
            $table->string('tmp_lahir', 50);
            $table->enum('jk', ['Laki-Laki','Perempuan']);
            $table->string('no_telp', 20);
            $table->enum('status',['Belum Menikah','Menikah']);
            $table->string('email')->nullable();
            $table->enum('gol_darah', ['O','A','B','AB']);
            $table->enum('agama', ['Islam','Kristen','Hindu','Buddha']);
            //foreign key
            // $table->string('golongan_id')->unsigned();
            // $table->foreign('golongan_id')
            //         ->references('id')->on('golongan')
            //         ->onDelete('cascade');
            $table->string('golongan_id');


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
        Schema::dropIfExists('pegawai');
    }
}
