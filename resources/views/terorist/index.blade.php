@extends('layouts.template')
@section('title','Data Master DTTOT')
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
                    @if(Auth::user()->role == 'admin')
                        <a href="{{route('terorist.create')}}" class="btn btn-primary">Tambah Pengguna Terduga</a>
                    @endif
                    <br><br>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Terduga</th>
                                    <th>Kode Densus</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->terduga}}</td>
                                    <td>{{$d->kode_densus}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" class="btn btn-primary" id="showModal" data-toggle="modal" data-target='#practice_modal' data-id="{{ $d->id }}">Detail</a>
                                            @if(Auth::user()->role == 'admin')
                                                <a href="{{route('terorist.edit',$d->id)}}" class="btn btn-info">Edit</a>
                                                <form action="{{route('terorist.destroy',$d->id)}}" method="post">
                                                    @csrf @method('delete')
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                                </form>
                                            @endif
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
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#showModal', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('terorist/' + id, function(data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit category");
                $('#practice_modal').modal('show');
                $('#terorist_id').val(data.data.id);
                $('#exampleModalLongTitle').text(data.data.nama);
                $('#desc').text(data.data.deskripsi);
                $('#terduga').text(data.data.terduga);
                $('#kode_densus').text(data.data.kode_densus);
                $('#tanggal_lahir').text(data.data.tanggal_lahir);
                $('#tempat_lahir').text(data.data.tempat_lahir);
                $('#warga_negara').text(data.data.warga_negara);
                $('#alamat').text(data.data.alamat);
                $('#pekerjaan').text(data.data.pekerjaan);
                $('#informasi_lain').text(data.data.informasi_lain);
            })
        });

    });
</script>
@endsection