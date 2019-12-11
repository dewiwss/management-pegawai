<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = 'pelatihan';
    protected $fillable = ['nama_pelatihan','instruktur','tempat','mulai_pelatihan','akhir_pelatihan'];

    /**
     * Method many to many.. pelatihan -> hasMany pegawai
     */
    public function pegawai(){
        return $this->belongsToMany(Pegawai::class,'pegawai_pelatihan');
    }
}
