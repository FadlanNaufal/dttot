@extends('layouts.template')
@section('title','Data Nasabah')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('alert') }}
                </div>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="{{route('nasabah.create')}}" class="btn btn-primary">Tambah Nasabah</a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Name</th>
                                    <th>Track</th>
                                    <th>status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$d->id_nik}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->track}}</td>
                                    <td>{{$d->status}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('nasabah.edit',$d->id)}}" class="btn btn-info">Edit</a>
                                            <form action="{{route('nasabah.destroy',$d->id)}}" method="post">
                                                @csrf @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('javascript')

@endsection