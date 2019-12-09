<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'golongan';

    protected $fillable = ['kode_golongan','gaji'];

    /**
     * Method one to many golongan -> hasMany pegawai
     * 
     * @return void
     */
    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
