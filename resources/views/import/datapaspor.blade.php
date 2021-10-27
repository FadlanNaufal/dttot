@extends('layouts.template')
@section('title','Import CSV Data DTTOT Paspor')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="https://docs.google.com/spreadsheets/d/1DOpdPNvWbVAhoKnyX7g9tH5on4N4Guirvj_jjulL4lU/edit?usp=sharing" target="_blank">Download Dummy CSV</button>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('post.datapaspor')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Upload CSV</label>
                                <input type="file" name="file" id="" class="form-control">
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