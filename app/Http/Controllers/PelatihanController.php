<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pelatihan;

class PelatihanController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){
            $pelatihan = Pelatihan::where('nama_pelatihan','LIKE','%'.$request->cari.'%')->orderby('kode_pelatihan','desc');
        }else{
            $pelatihan =  Pelatihan::orderby('kode_pelatihan','desc');
        }
        $pelatihan = $pelatihan->paginate(5);
        // dd($pelatihan);
        $pelatihan->appends($request->only('cari'));

        return view('pelatihan.index',compact('pelatihan'));
    }
    public function ShowFormCreate(){
        $pelatihan = Pelatihan::all();
        $pegawai = Pegawai::all();
        return view('pelatihan.create',compact('pegawai','pelatihan'));
    }
    public function creating(Request $request){
        $pelatihan=$request->all();
        Pelatihan::create($pelatihan);
        return redirect('/pelatihan')->with('Success','Data berhasil disimpan!!!');

    }

    public function detail($id){
        $pelatihan = Pelatihan::find($id);
        $pegawai = Pegawai::all();
        return view('pelatihan.detail',compact('pegawai','pelatihan'));
    }

    public function update($id){
        $pelatihan = Pelatihan::find($id);
        $pegawai = Pegawai::all();
        return view('pelatihan.update',compact('pegawai','pelatihan'));

    }

    public function updating(Request $request, $id){
        $pelatihan = Pelatihan::find($id);
        $pelatihan->update($request->all());
        return redirect('/pelatihan')->with('Success','Data berhasil diubah!!');
    }

    public function deleting($id){
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();
        return redirect('/pelatihan')->with('Success','Data berhasil dihapus!!');

    }
}
