@extends('layouts.template')
@section('title','Data Nasabah Ilegal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-smile"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Nasabah</h4>
                    </div>
                    <div class="card-body">
                        {{$total_nasabah}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-angry"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total DTTOT</h4>
                    </div>
                    <div class="card-body">
                        {{$total_dttot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        {{ __('Daftar Nasabah Ilegal') }}
                        <form action="{{route('nasabah.checkmass')}}" method="post">
                            @csrf
                            <button class="btn btn-primary">Cek Legalitas Nasabah</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                    @foreach($data as $datas)
                                    <tr>
                                        <td>{{$datas->name}}</td>
                                        <td>{{$datas->track}}</td>
                                        <td>{{$datas->id_nik}}</td>
                                        <td>{{$datas->status}}</td>
                                        <td>{{$datas->note}}</td>
                                        <td>
                                            <a href="" id="showModalCekNasabah" data-toggle="modal" data-target='#practice_modal_cek_nasabah' data-id="{{ $datas->id }}">Detail</a>
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

        $('body').on('click', '#showModalCekNasabah', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('nasabah/' + id, function(data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit category");
                $('#practice_modal_cek_nasabah').modal('show');
                $('#cek_nasabah_id').val(data.data.id);
                $('#exampleModalLongTitleCekNasabah').text(data.data.name);
                $('#cek_track').text(data.data.track);
                $('#cek_nik_data').text(data.data.id_nik);
                $('#cek_status').text(data.data.status);
                $('#cek_note').text(data.data.note);
            })
        });

    });
</script>
@endsection