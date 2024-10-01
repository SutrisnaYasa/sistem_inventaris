@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Import Data Inventaris</h1>
            </div>
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
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            <div class="card card-primary">
                <div class="card-body">
                    <div class="row" style="float: right;">
                        <a href ="{{ asset('contoh_file_import.xlsx') }}" >
                            <button class="btn btn-danger">Download Contoh File Import</button>
                        </a>
                    </div>
                        <br><br>
                        <label>Silahkan Pilih File Yang Akan Di Import</label>
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" class="form-control">
                                <br>
                                <button class="btn btn-primary">Import Data Inventaris</button>
                                <!--<a class="btn btn-warning" href="{{ route('export') }}">Export Data Invnetaris</a>-->
                                
                            </form>


                        <!--<div class="card-body">
                        <label>Export Data Inventaris</label>
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <a class="btn btn-danger" href="{{ route('export') }}">Export Data Invnetaris</a>
                            </form>
                        </div>-->
                    </div>
                </div>
            


@endsection