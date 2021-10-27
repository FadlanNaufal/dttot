@extends('layouts.template')
@section('title','Input Data Nasabah')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="{{route('nasabah.index')}}" class="btn btn-warning">Kembali</a>
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
                    <form method="POST" action="{{route('nasabah.update',$data->id)}}">
                        @csrf @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" class="form-control" required="" name="id_nik" value="{{$data->id_nik}}">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required="" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="" class="form-control">

                                    @if($data->status == 'lolos')
                                        <option value="lolos" selected>Lolos</option>
                                        <option value="tidak_lolos">Tidak lolos</option>
                                    @elseif($data->status == 'tidak_lolos')
                                        <option value="lolos">Lolos</option>
                                        <option value="tidak_lolos" selected>Tidak lolos</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Track</label>
                                <input type="text" class="form-control" required="" name="track" value="{{$data->track}}">
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <textarea name="note" id="" cols="30" rows="10" class="form-control">{{$data->note}}</textarea>
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