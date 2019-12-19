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
        $golongan = Golongan::all();
        return view('golongan.create',compact('golongan','pegawai'));
    }
    public function creating(Request $request){
        $golongan=$request->all();
        Golongan::create($golongan);
        return redirect('/golongan')->with('Success','Data berhasil disimpan!!!');

    }

    public function detail($id){
        $golongan = Golongan::find($id);
        $pegawai = Pegawai::all();
        return view('golongan.detail',compact('golongan','pegawai'));
    }

    public function update($id){
        $golongan = Golongan::find($id);
        $pegawai = Pegawai::all();
        return view('golongan.update',compact('golongan','pegawai'));

    }

    public function updating(Request $request, $id){
        $golongan = Golongan::find($id);
        $golongan->update($request->all());
        return redirect('/golongan')->with('Success','Data berhasil diubah!!');
    }

    public function deleting($id){
        $golongan = Golongan::find($id);
        $golongan->delete();
        return redirect('/golongan')->with('Success','Data berhasil dihapus!!');

    }

}
