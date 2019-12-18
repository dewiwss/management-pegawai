<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pelatihan;
use App\Golongan;

class GolonganController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){
            $golongan = Golongan::where('kode_golongan','LIKE','%'.$request->cari.'%')->orderby('kode_golongan','asc');
            // $golongan = golongan::where('jabatan','LIKE','%'.$request->cari.'%')->orderby('nama','asc');
            // $golongan = golongan::where('departemen','LIKE','%'.$request->cari.'%')->orderby('nama','asc');
        }else{
            $golongan =  Golongan::orderby('kode_golongan','asc');
        }
        $golongan = $golongan->paginate(5);
        // dd($golongan);
        $golongan->appends($request->only('cari'));

        return view('golongan.index',compact('golongan'));

    }

        //belum diedit
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
