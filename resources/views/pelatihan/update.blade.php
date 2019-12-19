@extends('layouts.master')

@section('title','Data Pelatihan')

@section('nama_halaman','Update Data Pelatihan')

@section('content')

<div class="row mt--7"> 
    <div class="col-md-12">
        <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('pelatihan') }}'"><i class="ni ni-bold-left"></i> Kembali</button>
        <div class="card bg-default shadow mt-3">
        <div class="card-header bg-transparent border-0">
        </div>
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Data Pelatihan</h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary my-4">Settings</a>
                    </div> --}}
                </div>
                </div>
                <div class="card-body">

                <form role="form" action="/pelatihan/{{$pelatihan->id}}/updating" method="post">
                    {{csrf_field()}}
                    <h6 class="heading-small text-muted mb-4">Informasi Pelatihan</h6>                                                                                
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-kode-pelatihan">Kode Pelatihan</label>
                        <input type="text" id="input-kode-pelatihan" name="kode_pelatihan" class="form-control form-control-alternative" placeholder="Kode Pelatihan" value="{{$pelatihan->kode_pelatihan}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-nama-pelatihan">Nama Pelatihan</label>
                        <input type="text" id="input-nama-pelatihan" name="nama_pelatihan" class="form-control form-control-alternative" placeholder="Nama Pelatihan" value="{{$pelatihan->nama_pelatihan}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-tempat">Tempat Pelatihan</label>
                        <input type="text" id="input-tempat" name="tempat" class="form-control form-control-alternative" placeholder="Tempat Pelatihan" value="{{$pelatihan->tempat}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-instruktur">Instruktur Pelatihan</label>
                        <input type="text" id="input-instruktur" name="instruktur" class="form-control form-control-alternative" placeholder="Instruktur Pelatihan" value="{{$pelatihan->instruktur}}">
                        </div>
                        </div>                  
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-mulai_pelatihan">Mulai Pelatihan</label>
                        <input type="date" id="input-mulai_pelatihan" name="mulai_pelatihan" class="form-control form-control-alternative" placeholder="Mulai Pelatihan" value="{{$pelatihan->mulai_pelatihan}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-akhir_pelatihan">Akhir Pelatihan</label>
                            <input type="date" id="input-akhir_pelatihan" name="akhir_pelatihan" class="form-control form-control-alternative" placeholder="Akhir Pelatihan" value="{{$pelatihan->akhir_pelatihan}}">
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
