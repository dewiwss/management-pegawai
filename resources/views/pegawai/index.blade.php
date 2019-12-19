@extends('layouts.master')

@section('title','Data Pegawai')

@section('nama_halaman','Data Pegawai')

@section('content')


  <div class="row">
        @if(session('Success'))
        <div class="alert alert-success alert-dismissible fade show mt--5" style="center" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text"><strong>Success!</strong> {{session('Success')}}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
  </div>
<!-- Dark table -->
<div class="row mt--3">
  <div class="col">
    <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-color="success" data-placement="top" onclick="window.location='{{ url('pegawai/create') }}'">
    Tambah Data Pegawai
    </button>
  </div>
  <div class="col">
  <div class="card-tools float-right">
    <form action="/pegawai" method="get">
    <div class="input-group input-group-sm" style="width: 150px;">
    <input type="text" class="form-control float-right" placeholder="Search" name="cari">
    <div class="input-group-append">
        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
    </div>
    </div>
    </form>
  </div>
  </div>
  {{-- tabel --}}
  <div class="col mt-2">
    <div class="card bg-default shadow">
      <div class="card-header bg-transparent border-0">
        {{-- <h3 class="text-white mb-0">Tabel</h3> --}}
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Departemen</th>
              <th scope="col">Golongan</th>
              <th scope="col">Gaji</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0 ?>
            @foreach ( $pegawai as $peg)
            <?php $no++ ?>
            <tr>
          
            <td>
              {{$no}}
            </td>
            <td>{{$peg->nip}}</td>
            <td>{{$peg->nama}}</td>
            <td>{{$peg->jabatan}}</td>
            <td>{{$peg->departemen}}</td>
            <td>{{$peg->golongan->kode_golongan}}</td>
            <td>Rp. {{$peg->golongan->gaji}}</td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item badge-info" href="/pegawai/{{$peg->id}}/view_detail"><i class="ni ni-badge"></i> View</a>
                        <a class="dropdown-item badge-success" href="/pegawai/{{$peg->id}}/update"><i class="ni ni-settings"></i> Update</a>
                        <a class="dropdown-item badge-danger" href="/pegawai/{{$peg->id}}/delete" onclick="return confirm('Yakin menghapus pegawai bernama {{$peg->nama}}?')"><i class="ni ni-basket"></i> Delete</a>
                    </div>
                </div>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer clearfix">
      <div class="row">
        <div class="col-sm-8">
            <span class="badge badge-pill badge-default mb-3">Jumlah Data : {{ $pegawai->total() }} , 
                Data Per Halaman : {{ $pegawai->perPage() }} </span>
        </div>
        <div class="col">
            {{$pegawai->links()}}
        </div>
      </div>
      
      
    </div>
  </div>
</div>

@endsection