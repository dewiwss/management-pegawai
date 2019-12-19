@extends('layouts.master')

@section('title','Data Cuti')

@section('nama_halaman','Update Data Cuti')

@section('content')

<div class="row mt--7"> 
    <div class="col-md-12">
        <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('cuti') }}'"><i class="ni ni-bold-left"></i> Kembali</button>
        <div class="card bg-default shadow mt-3">
        <div class="card-header bg-transparent border-0">
        </div>
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Data Cuti</h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary my-4">Settings</a>
                    </div> --}}
                </div>
                </div>
                <div class="card-body">

                <form role="form" action="/cuti/{{$cuti->id}}/updating" method="post">
                    {{csrf_field()}}
                    <h6 class="heading-small text-muted mb-4">Cuti information</h6>                                                                                
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <label for="">Pegawai</label>
                            <div class="form-group focused">
                                <select class="form-control" name="pegawai_id">
                                    <option>-- Pilih Pegawai --</option>
                                    @foreach ($pegawai as $peg)
                                    <option value="{{$peg->id}}">{{$peg->nama}}</option>
                                    @endforeach                                                                  
                                </select>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option>-- Pilih Cuti --</option>
                            <option value="Cuti Sakit">Cuti Sakit</option>
                            <option value="Cuti Tahunan">Cuti Tahunan</option>
                            <option value="Cuti Harian">Cuti Harian</option>
                            <option value="Cuti Bulanan">Cuti Bulanan</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-tgl_pengajuan">Tanggal Pengajuan</label>
                        <input required type="date" id="input-tgl_pengajuan" name="tgl_pengajuan" class="form-control form-control-alternative" placeholder="Tanggal Pengajuan" value="{{$cuti->tgl_pengajuan}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-hari">Jumlah hari</label>
                            <input required type="text" id="input-hari" name="hari" class="form-control form-control-alternative" placeholder="Lama Cuti ... hari" value="{{$cuti->hari}}">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-control-label" for="input-status">Status</label>
                            <div class="form-group focused">
                                <select class="form-control" name="status">
                                    <option>-- Pilih Status --</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="disetujui">Disetujui</option>
                                    <option value="menunggu">Menunggu</option>
                                </select>
                            </div>                                                        
                        </div>
                    </div>
                    
                    <hr class="my-4">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Update</button>                
            </div>
            </div>   
        </form>

        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

@endsection
