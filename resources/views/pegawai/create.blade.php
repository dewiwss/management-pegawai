@extends('layouts.master')

@section('title','Data Pegawai')

@section('nama_halaman','Tambah Data Pegawai')

@section('content')
<div class="row mt--7"> 
    <div class="col">
        <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('pegawai') }}'"><i class="ni ni-bold-left"></i> Kembali</button>
        <div class="card bg-default shadow mt-3">
        <div class="card-header bg-transparent border-0">
        </div>
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Data Pegawai</h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary my-4">Settings</a>
                    </div> --}}
                </div>
                </div>
                <div class="card-body">

                <form role="form" action="{{ route('post_datapegawai')}}" method="post">
                    {{csrf_field()}}
                    <h6 class="heading-small text-muted mb-4">Employee information</h6>
                    <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-nip">NIP</label>
                                <input required type="text" id="input-nip" name="nip" class="form-control form-control-alternative" placeholder="Nomor Induk Pegawai" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-nama">Nama Lengkap</label>
                            <input required required type="text" id="input-nama" name="nama" class="form-control form-control-alternative" placeholder="Nama lengkap" value="">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-jabatan">Jabatan</label>
                            <input required type="text" id="input-jabatan" name="jabatan" class="form-control form-control-alternative" placeholder="contoh: supervisor" value="">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-departemen">Departemen</label>
                            <input required type="text" id="input-departemen" name="departemen" class="form-control form-control-alternative" placeholder="contoh: Human Resource" value="">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="gol_dgolonganarah">Golongan</label>
                            <select class="form-control" name="golongan_id" id="golongan">
                                @foreach ( $golongan as $gol )
                            <option value="{{$gol->id}}">{{$gol->kode_golongan}} - Rp. {{$gol->gaji}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr class="my-4">
                    <!-- About -->
                    <h6 class="heading-small text-muted mb-4">About</h6>
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-tempat-lahir">Tempat Lahir</label>
                            <input required type="text" id="input-tempat-lahir" name="tmp_lahir" class="form-control form-control-alternative" placeholder="Ciamis" value="">
                        </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir</label>
                            <input required class="form-control datepicker" name="tgl_lahir" placeholder="1999-08-27" type="date" value="">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <label for="gol_darah">Golongan Darah</label>
                        <select class="form-control" name="gol_darah" id="gol_darah">
                            <option>A</option>
                            <option>B</option>
                            <option>O</option>
                            <option>AB</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-agama">Agama</label>
                            <input required type="text" id="input-agama" name="agama" class="form-control form-control-alternative" placeholder="agama">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                            <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                            <div class="custom-control custom-radio mb-3">
                                <input required name="jk" class="custom-control-input" id="Laki-Laki" type="radio" value="Laki-Laki">
                                <label class="custom-control-label" for="Laki-Laki">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input required name="jk" class="custom-control-input" id="Perempuan" type="radio" value="Perempuan">
                                <label class="custom-control-label" for="Perempuan" >Perempuan</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                            <label class="form-control-label" for="input-status">Status</label>
                            <div class="custom-control custom-radio mb-3">
                                <input required name="status" class="custom-control-input" id="Menikah" type="radio" value="Menikah">
                                <label class="custom-control-label" for="Menikah" ">Menikah</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input required name="status" class="custom-control-input" id="Belum Menikah" type="radio" value="Belum Menikah">
                                <label class="custom-control-label" for="Belum Menikah" >Belum Menikah</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr class="my-4">
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-address">Alamat</label>
                            <textarea rows="4" name="alamat" class="form-control form-control-alternative" placeholder="Jl. Sukahati No. 6 Kecamatan Sindangrasa 46268"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-city">Email</label>
                            <input required type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="email@email.com" value="">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-hp">No Handphone</label>
                            <input required type="text" name="no_telp" id="input-hp" class="form-control form-control-alternative" placeholder="081xxxx" value="">
                        </div>
                        </div>
                    </div>
                    </div>
                    <hr class="my-4">
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">Experience</h6>
                    <div class="pl-lg-4">
                    <div class="form-group focused">
                        <label for="input-pelatihan">Nama Pelatihan</label>
                        <input required type="text" name="pelatihan" id="input-pelatihan" class="form-control form-control-alternative" placeholder="Pelatihan Pemrograman Web" value="">
                    </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Tambah</button>
            
            {{-- @if(session('Success'))
            <div class="col-md-4">
                    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                        <div class="modal-content bg-gradient-danger">
                            
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            
                            <div class="modal-body">
                                
                                <div class="py-3 text-center">
                                    <i class="ni ni-bell-55 ni-3x"></i>
                                    <h4 class="heading mt-4">You should read this!</h4>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                </div>
                                
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white">Ok, Got it</button>
                                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            @endif --}}



                
            </div>
            </div>   
        </form>

        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
{{-- <script>
    $(document).ready(function(){
        window.setInterval(function () {
                location.href = "/pegawai";
        }, 3000);
    });
</script> --}}
            

@endsection
