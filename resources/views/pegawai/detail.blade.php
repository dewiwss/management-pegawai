@extends('layouts.master')

@section('title','Data Pegawai')

@section('nama_halaman','Detail Data Pegawai')

@section('content')
<button type="button" class="btn btn-secondary btn-sm mt--5" onclick="window.location='{{ url('pegawai') }}'"><i class="ni ni-bold-left"></i> Kembali</button>
<!-- Header -->
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 35%; background-image: url({{asset('admin/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
    <!-- Mask -->
   
    <span class="mask bg-gradient-default opacity-8"></span>
</div>

    <!-- Page content -->
    <div class="container-fluid mt--9">
       
    <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
            <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                <a href="#">
                    <img src="{{asset('admin/assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
                </a>
                </div>
            </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
            </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
            <div class="row">
                <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                    <span class="heading">22</span>
                    <span class="description">Friends</span>
                    </div>
                    <div>
                    <span class="heading">10</span>
                    <span class="description">Photos</span>
                    </div>
                    <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="text-center">
                <h3>
                {{$pegawai->nama}}<span class="font-weight-light">, {{$pegawai->nip}}</span>
                </h3>
                <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{$pegawai->tmp_lahir}},{{$pegawai->tgl_lahir}}
                </div>
                <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>{{$pegawai->jabatan}} - {{$pegawai->departemen}}
                </div>
                <div>
                <i class="ni education_hat mr-2"></i>PT. Praktikum PWEB
                </div>
                <hr class="my-4" />
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-8 order-xl-1">            
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                <h3 class="mb-0">{{$pegawai->nama}}'s Profile Detail</h3>
                </div>
                <div class="col-4 text-right">
                <a href="/pegawai/{{$pegawai->id}}/update" class="btn btn-sm btn-primary">Edit Profil</a>
                </div>
            </div>
            </div>
            <div class="card-body">
            <form>
                <h6 class="heading-small text-muted mb-4">EMPLOYEE INFORMATION</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-nip">NIP</label>
                            <input type="text" id="input-nip" name="nip" class="form-control form-control-alternative" placeholder="Nomor Induk Pegawai" value="{{$pegawai->nip}}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-nama">Nama Lengkap</label>
                            <input type="text" id="input-nama" name="nama" class="form-control form-control-alternative" placeholder="Nama lengkap" value="{{$pegawai->nama}}" disabled>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-jabatan">Jabatan</label>
                        <input type="text" id="input-jabatan" name="jabatan" class="form-control form-control-alternative" placeholder="contoh: supervisor" value="{{$pegawai->jabatan}}" disabled>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-departemen">Departemen</label>
                        <input type="text" id="input-departemen" name="departemen" class="form-control form-control-alternative" placeholder="contoh: Human Resource" value="{{$pegawai->departemen}}" disabled>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="gol_dgolonganarah">Golongan</label>
                            <input type="text" name="golongan_id" id="golongan" class="form-control form-control-alternative" placeholder="contoh: Human Resource" value="{{$pegawai->golongan->kode_golongan}} - Rp. {{$pegawai->golongan->gaji}}" disabled>
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
                        <input type="text" id="input-tempat-lahir" name="tmp_lahir" class="form-control form-control-alternative" placeholder="Ciamis" value="{{$pegawai->tmp_lahir}}" disabled>
                        </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir</label>
                        <input class="form-control datepicker" name="tgl_lahir" placeholder="1999-08-27" type="text" value="{{$pegawai->tgl_lahir}}" disabled>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <label for="gol_darah">Golongan Darah</label>
                        <input class="form-control datepicker" name="gol_darah" id="gol_darah" placeholder="1999-08-27" type="text" value="{{$pegawai->gol_darah}}" disabled>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-agama">Agama</label>
                        <input type="text" id="input-agama" name="agama" class="form-control form-control-alternative" placeholder="agama" value="{{$pegawai->agama}}" disabled>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                            <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                            <div class="custom-control custom-radio mb-3">
                                <input name="jk" class="custom-control-input" id="Laki-Laki" type="radio" value="Laki-Laki">
                                <label class="custom-control-label" for="Laki-Laki">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input name="jk" class="custom-control-input" id="Perempuan" type="radio" value="Perempuan">
                                <label class="custom-control-label" for="Perempuan" >Perempuan</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                            <label class="form-control-label" for="input-status">Status</label>
                            <div class="custom-control custom-radio mb-3">
                                <input name="status" class="custom-control-input" id="Menikah" type="radio" value="Menikah">
                                <label class="custom-control-label" for="Menikah" ">Menikah</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input name="status" class="custom-control-input" id="Belum Menikah" type="radio" value="Belum Menikah">
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
                        <input rows="4" name="alamat" class="form-control form-control-alternative" placeholder="Jl. Sukahati No. 6 Kecamatan Sindangrasa 46268" value="{{$pegawai->alamat}}" disabled>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-city">Email</label>
                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="email@email.com" value="{{$pegawai->email}}" disabled>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-hp">No Handphone</label>
                        <input type="text" name="no_telp" id="input-hp" class="form-control form-control-alternative" placeholder="081xxxx" value="{{$pegawai->no_telp}}" disabled>
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
                    <input type="text" name="pelatihan" id="input-pelatihan" class="form-control form-control-alternative" placeholder="Pelatihan Pemrograman Web" value="{{$pegawai->pelatihan}}" disabled>
                    </div>
                    </div>
                </div>
            </div>
                
            </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection