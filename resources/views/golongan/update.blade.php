@extends('layouts.master')

@section('title','Data Golongan')

@section('nama_halaman','Update Data Golongan')

@section('content')

<div class="row mt--7"> 
    <div class="col">
        <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('golongan') }}'"><i class="ni ni-bold-left"></i> Kembali</button>
        <div class="card bg-default shadow mt-3">
        <div class="card-header bg-transparent border-0">
        </div>
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Data Golongan</h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary my-4">Settings</a>
                    </div> --}}
                </div>
                </div>
                <div class="card-body">

                <form role="form" action="/golongan/{{$golongan->id}}/updating" method="post">
                    {{csrf_field()}}
                    <h6 class="heading-small text-muted mb-4">Informasi Golongan</h6>
                    <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-id">ID</label>
                            <input type="text" id="input-id" name="kode_golongan" class="form-control form-control-alternative" placeholder="Kode Golongan" value="{{$golongan->kode_golongan}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="gaji">Gaji</label>
                            <input type="text" id="gaji" name="gaji" class="form-control form-control-alternative" placeholder="Gaji" value="{{$golongan->gaji}}">
                            </div>
                        </div>
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
