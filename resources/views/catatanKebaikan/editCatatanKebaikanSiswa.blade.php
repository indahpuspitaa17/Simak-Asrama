@extends('layouts.app')

@section('content')
@include('layouts.allert')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Tambah Catatan Kebaikan</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Kebaikan & Keburukan</a></li>
                                        <li class="active">Tambah Catatan Kebaikan & Keburukan Siswa</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>    
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Catatan Kebaikan & Keburukan</strong>
                            </div>
                            <div class="card-body">
                                <div class="kotaktambah">
                                    <div class="headertambah">
                                        <h4>Masukan Catatan Kebaikan/Kuburukan </h4>
                                        <div class="garis2"></div>
                                    </div>
                                    @include('layouts.allert')
                                    <div class="isitambah">
                                         <form action="/catatan-kebaikan/{{$catatan->id}}/update" method="POST">
                                            @csrf
                                            <table class="table-bio">
                                                <!-- <tr >
                                                    <th style="width: 200px">Hari/Tanggal</th>
                                                    <td><input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jam</th>
                                                    <td> <input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr> -->
                                                <tr>
                                                    <th>Jenis Amalan</th>
                                                    <td> 
                                                        <select name="jenis" class="form-control" id="jenis">
                                                            <option value="{{$catatan->jenis}}" @if($catatan->jenis=='Baik') selected @endif>Baik</option>
                                                            <option value="{{$catatan->jenis}}" @if($catatan->jenis=='Buruk') selected @endif>Buruk</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kegiatan</th>
                                                    <td> <input value="{{$catatan->kegiatan}}"name="kegiatan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi Kegiatan</th>
                                                    <td> <textarea name="keterangan" class="form-control ini" >{{$catatan->keterangan}}</textarea></td>
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <a href="/catatan-kebaikan" class="btn btn-danger">Batal</a>    
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div> <!-- form-group// -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>
@endsection