@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
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
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="{{ route('profile.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group mb-2 col-md-6">
                                        <div class="row">
                                            <div class="form-group mb-2 col-md-12">
                                                <label for="">Data Diri :</label>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nama :</label>
                                                    <input type="text" name="name" id="name" class="form-control  "
                                                        value="{{ $user->name }}">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Email : </label>
                                                    <input type="text" name="email" value="{{ $user->email }}" id="email"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group  mb-2 col-md-6 ">
                                        <div class="row">
                                            <div class="form-group mb-2 col-md-12">
                                                <label for="label">Ganti Password : </label>
                                                <div class="form-group mb-2  col-md-12">
                                                    <div class="form-group mb-2 col-md-12 ">
                                                        <label for="password" class="">Password :</label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control @error('password') is-invalid @enderror  ">

                                                        @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-2 col-md-12 ">
                                                        <label for="password" class="">Konfirmasi Password :</label>
                                                        <input type="password" name="konfirm_password" id="konfirm_passoword"
                                                            class="form-control ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="form-group mb-2 col-md-12">
                                    <button type="submit" class="btn btn-success"> simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
