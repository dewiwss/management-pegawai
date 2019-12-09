<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nip','nama','alamat','tgl_lahir','tmp_lahir','jk','no_telp','status','email','gol_darah','agama','golongan_id'];

    /**
     * Method many to one.. pegawai -> belongs to golongan
     */
    public function golongan(){
        return $this->belongsTo(Golongan::class);
    }
}
