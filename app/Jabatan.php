<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    protected $fillable = ['kode_jabatan','nama_jabatan'];

    /**
     * Method many to many jabatan <-> departemen
     * 
     * @return void
     */
    public function departemen(){
        return $this->belongsToMany(Departemen::class);
    }
}
