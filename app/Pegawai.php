<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nip','nama','alamat','tgl_lahir','tmp_lahir','jk','no_telp','status','email','gol_darah','agama','jabatan','departemen','golongan_id'];

    /**
     * Method many to one.. pegawai -> belongs to golongan
     */
    public function golongan(){
        return $this->belongsTo(Golongan::class);
    }

    /**
     * Method many to many pegawai -> hasMany pelatihan
     * 
     * @return void
     */
    public function pelatihan(){
        return $this->hasMany(Pelatihan::class);
    }

    /**
     * Method one to many pegawai -> hasMany cuti
     * 
     * @return void
     */
    public function cuti(){
        return $this->hasMany(Cuti::class);
    }
}
