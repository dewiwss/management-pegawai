<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = ['jenis','tgl_pengajuan','hari','status','pegawai_id'];

     /**
     * Method many to one.. cuti -> belongs to pegawai
     */
    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
}
