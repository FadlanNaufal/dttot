@extends('layouts.template')
@section('title','Data Akses Pengguna')
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
                    <a href="{{route('user.create')}}" class="btn btn-primary">Tambah Pengguna</a>
                    <br><br>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->role}}</td>
                                    <td>
                                        @if(Auth::user()->id == $d->id)
                                        <div class="btn-group">
                                            <a href="{{route('user.edit',$d->id)}}" class="btn btn-info">Edit</a>
                                            </div>
                                        @else
                                            @if($d->role == 'admin')
                                            <span class="badge badge-warning" data-toggle="left" data-placement="right" title="Anda tidak dapat mengubah data Admin lain.">No Action</span>
                                            @elseif($d->role == 'user')
                                            <div class="btn-group">
                                                <a href="{{route('user.edit',$d->id)}}" class="btn btn-info">Edit</a>
                                                <form action="{{route('user.destroy',$d->id)}}" method="post">
                                                    @csrf @method('delete')
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                                </form>
                                            </div>
                                            @endif
                                        @endif
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