@extends('layouts.template')
@section('title','Data Paspor')
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
                                        <a href="" id="showModalPaspor" data-toggle="modal" data-target='#practice_modal_paspor' data-id="{{ $d->id }}">Edit</a>
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

        $('body').on('click', '#showModalPaspor', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('datapaspor/' + id, function(data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit category");
                $('#practice_modal_paspor').modal('show');
                $('#paspor_id').val(data.data.id);
                $('#exampleModalLongTitlePaspor').text(data.data.nama);
                $('#id_paspor').text(data.data.id_paspor);
                $('#desc_paspor').text(data.data.desc);
                $('#terduga_paspor').text(data.data.terduga);
                $('#kode_densus_paspor').text(data.data.kode_densus);
                $('#tanggal_lahir_paspor').text(data.data.tanggal_lahir);
                $('#tempat_lahir_paspor').text(data.data.tempat_lahir);
                $('#warga_negara_paspor').text(data.data.wn);
                $('#alamat_paspor').text(data.data.alamat);
                $('#pekerjaan_paspor').text(data.data.pekerjaan);
                $('#informasi_lain_paspor').text(data.data.informasi_lain);
            })
        });

    });
</script>
@endsection