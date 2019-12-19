<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Cuti;

class CutiController extends Controller
{
    // public function index(){
    //     return view('cuti.index');
    // }

    public function index(Request $request){
        if ($request->has('cari')){
            $cuti = Cuti::where('jenis','LIKE','%'.$request->cari.'%')->orderby('tgl_pengajuan','desc');
        }else{
            $cuti =  Cuti::orderby('tgl_pengajuan','desc');
        }
        $cuti = $cuti->paginate(5);
        // dd($cuti);
        $cuti->appends($request->only('cari'));
        $pegawai = Pegawai::all();

        return view('cuti.index',compact('cuti','pegawai'));
    }
    public function ShowFormCreate(){
        $pegawai = Pegawai::all();
        $cuti = Cuti::all();
        return view('cuti.create',compact('cuti','pegawai'));
    }
    public function creating(Request $request){
        $cuti=$request->all();
        Cuti::create($cuti);
        return redirect('/cuti')->with('Success','Data berhasil disimpan!!!');

    }

    public function detail($id){
        $cuti = Cuti::find($id);
        $pegawai = Pegawai::all();
        return view('cuti.detail',compact('pegawai','cuti'));
    }

    public function update($id){
        $cuti = Cuti::find($id);
        $pegawai = Pegawai::all();
        return view('cuti.update',compact('pegawai','cuti'));

    }

    public function updating(Request $request, $id){
        $cuti = Cuti::find($id);
        $cuti->update($request->all());
        return redirect('/cuti')->with('Success','Data berhasil diubah!!');
    }

    public function deleting($id){
        $cuti = Cuti::find($id);
        $cuti->delete();
        return redirect('/cuti')->with('Success','Data berhasil dihapus!!');

    }
    
    
}
