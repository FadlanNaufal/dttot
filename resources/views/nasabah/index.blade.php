@extends('layouts.template')
@section('title','Data Nasabah Ilegal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    @if ($data == null)
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('assets/img/empty.png')}}" alt="" width="300">
                        <h3 class="mt-4">Hasil pencarian kosong, cari data nasabah Anda</h3>
                        <form action="{{route('nasabah.search')}}" method="POST" class="form-inline mt-0 mt-md-3">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="nik" placeholder="Masukkan Nik">
                            </div>
                            <div class="form-group ml-0 ml-md-3">
                                <button class="btn btn-primary">Cari</button>
                            </div>
                        </form>
                    </div>
                    @else
                    <form action="{{route('nasabah.search')}}" method="POST" class="form-inline mt-0 mt-md-3 mb-3 float-right">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan Nik">
                        </div>
                        <div class="form-group ml-0 ml-md-3">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jalur</th>
                                    <th>ID NIK</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->track}}</td>
                                    <td>{{$data->id_nik}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->note}}</td>
                                    <td>
                                        <a href="" id="showModalNasabah" data-toggle="modal" data-target='#practice_modal_nasabah' data-id="{{ $data->id }}">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
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

        $('body').on('click', '#showModalNasabah', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('nasabah/' + id, function(data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit category");
                $('#practice_modal_nasabah').modal('show');
                $('#nasabah_id').val(data.data.id);
                $('#exampleModalLongTitleNasabah').text(data.data.name);
                $('#track').text(data.data.track);
                $('#nik_data').text(data.data.id_nik);
                $('#status').text(data.data.status);
                $('#note').text(data.data.note);
            })
        });

    });
</script>
@endsection