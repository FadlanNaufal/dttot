@extends('layouts.template')
@section('title','Data NIK')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
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
                                        <a href="" id="showModalNik" data-toggle="modal" data-target='#practice_modal_nik' data-id="{{ $d->id }}">Edit</a>
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

        $('body').on('click', '#showModalNik', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('datanik/' + id, function(data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit category");
                $('#practice_modal_nik').modal('show');
                $('#datanik_id').val(data.data.id);
                $('#exampleModalLongTitleNik').text(data.data.nama);
                $('#id_nik').text(data.data.id_nik);
                $('#desc_nik').text(data.data.desc);
                $('#terduga_nik').text(data.data.terduga);
                $('#kode_densus_nik').text(data.data.kode_densus);
                $('#tanggal_lahir_nik').text(data.data.tanggal_lahir);
                $('#tempat_lahir_nik').text(data.data.tempat_lahir);
                $('#warga_negara_nik').text(data.data.wn);
                $('#alamat_nik').text(data.data.alamat);
                $('#pekerjaan_nik').text(data.data.pekerjaan);
                $('#informasi_lain_nik').text(data.data.informasi_lain);
            })
        });

    });
</script>
@endsection