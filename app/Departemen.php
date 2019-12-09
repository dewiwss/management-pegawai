<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = 'departemen';
    protected $fillable = ['kode_departemen','nama_departemen'];

    /**
     * Method many to many jabatan <-> departemen
     * 
     * @return void
     */
    public function jabatan(){
        return $this->belongsToMany(Jabatan::class);
    }
}
