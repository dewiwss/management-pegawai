<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
// use Request;
use App\Pegawai;
use App\Pelatihan;
use App\Golongan;

class PegawaiController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){
            $pegawai = Pegawai::where('nama','LIKE','%'.$request->cari.'%')->orderby('nama','asc');
        }else{
            $pegawai =  Pegawai::orderby('nama','asc');
        }
        $pegawai = $pegawai->paginate(5);
        $pegawai->appends($request->only('cari'));

        return view('pegawai.index',compact('pegawai'));
    }
    public function ShowFormCreate(){
        $pegawai = Pegawai::all();
        $pelatihan = Pelatihan::all();
        $golongan = Golongan::all();
        return view('pegawai.create',compact('pelatihan','golongan','pegawai'));
    }
    public function creating(Request $request){
        $pegawai=$request->all();
        Pegawai::create($pegawai);
        // Pegawai::create($request::all());

        return redirect('/pegawai')->with('Success','Data berhasil disimpan!!!');

    }

}
