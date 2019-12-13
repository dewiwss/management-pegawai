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
        // dd($pegawai);
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
        return redirect('/pegawai')->with('Success','Data berhasil disimpan!!!');

    }

    public function detail($id){
        $pegawai = Pegawai::find($id);
        $pelatihan = Pelatihan::all();
        $golongan = Golongan::all();
        return view('pegawai.detail',compact('pelatihan','golongan','pegawai'));
    }

    public function update($id){
        $pegawai = Pegawai::find($id);
        $pelatihan = Pelatihan::all();
        $golongan = Golongan::all();
        return view('pegawai.update',compact('pelatihan','golongan','pegawai'));

    }

    public function updating(Request $request, $id){
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/pegawai')->with('Success','Data berhasil diubah!!');
    }

    public function deleting($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai')->with('Success','Data berhasil dihapus!!');

    }

}
