@extends('layouts.template')
@section('title','Input Data Paspor')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="{{route('datapaspor.index')}}" class="btn btn-warning">Kembali</a>
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
                    <form method="POST" action="{{route('datapaspor.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" required="" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Paspor</label>
                                <input type="text" class="form-control" required="" name="id_paspor">
                            </div>
                            <div class="form-group">
                                <label>Terduga</label>
                                <select name="terduga" id="" class="form-control">
                                    <option value="Orang">Orang</option>
                                    <option value="Korporasi">Korporasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Densus</label>
                                <input type="text" class="form-control" required="" name="kode_densus">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" required="" name="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" required="" name="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label>Warga Negara</label>
                                <input type="text" class="form-control" required="" name="wn">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" class="form-control" required="" name="pekerjaan">
                            </div>
                            <div class="form-group">
                                <label>Informasi Lain</label>
                                <textarea name="info_lain" id="" cols="30" rows="10" class="form-control"></textarea>
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