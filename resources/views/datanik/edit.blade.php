@extends('layouts.template')
@section('title','Data Master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="{{route('datanik.index')}}" class="btn btn-warning">Kembali</a>
                    <br><br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{route('datanik.update',$data->id)}}">
                        @csrf @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" required="" name="nama" value="{{$data->nama}}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
                                    {{$data->desc}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" required="" name="id_nik" value="{{$data->id_nik}}">
                            </div>
                            <div class="form-group">
                                <label>Terduga</label>
                                <select name="terduga" id="" class="form-control">
                                    @if($data->terduga == 'Orang')
                                        <option value="Orang" selected>Orang</option>
                                        <option value="Korporasi">Korporasi</option>
                                    @elseif($data->terduga == 'Korporasi')
                                        <option value="Orang">Orang</option>
                                        <option value="Korporasi" selected>Korporasi</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Densus</label>
                                <input type="text" class="form-control" required="" name="kode_densus" value="{{$data->kode_densus}}">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" required="" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" required="" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                            </div>
                            <div class="form-group">
                                <label>Warga Negara</label>
                                <input type="text" class="form-control" required="" name="wn" value="{{$data->wn}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{$data->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" class="form-control" required="" name="pekerjaan" value="{{$data->pekerjaan}}">
                            </div>
                            <div class="form-group">
                                <label>Informasi Lain</label>
                                <textarea name="info_lain" id="" cols="30" rows="10" class="form-control">
                                {{$data->info_lain}}
                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')

@endsection