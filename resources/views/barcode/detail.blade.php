@extends('layouts.app')

@section('content')
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Detail Barang</h1>
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
                        <div class="card card-primary">
                            <div class="card-body">
                                <form action="{{ route('barcode-data.update', $inventaris->id) }}" method="POST">

                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nama Barang :</label>
                                                    <h5>{{ $inventaris->nama_barang }} </h5>
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="mr-4">Nomor Inventaris :</label>
                                                    <h5>{{ $inventaris->nomor_inventaris }}</h5>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Jenis Barang :</label>
                                                            <h4>{{ $inventaris->jenis_barang }}</h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Jenis Barang :</label>
                                                            <h4>{{ $inventaris->kode_jenis_barang }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kategori Barang :</label>
                                                            <h4>{{ $inventaris->kategori_barang }}</h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Kategori Barang :</label>
                                                            <h4>{{ $inventaris->kode_kategori }}</h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-12">
                                                            <label for="" class="">Pilihan :</label>
                                                            <h4>{{ $inventaris->pilihan }}</h4>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group  mb-2 col-md-6">
                                                            <label for="" class="">Kode Lokasi :</label>
                                                            <h4>{{ $inventaris->kode_lokasi }}</h4>
                                                        </div>
                                                        <div class=" form-group  mb-2 col-md-6"> <label for=""
                                                                class="">Lokasi
                                                                <h4>{{ $inventaris->lokasi }}</h4>
                                                        </div>

                                                        <div class=" form-group  mb-2 col-md-12"> <label for=""
                                                                class=""> Pilihan 2
                                                                :</label>
                                                            <h4>{{ $inventaris->pilihan_02 }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="lokasi_lantai" class="">Lokasi Lantai:</label>
                                                            <h4>{{ $inventaris->lokasi_lantai }}</h4>

                                                        </div>
                                                        <div class="form-group mb-2 col-md-6 ">

                                                            <label for="kode_lantai" class="mr-2">Kode Lantai :</label>
                                                            <h4>{{ $inventaris->kode_lantai }}</h4>
                                                        </div>
                                                        <div class="form-group   mb-2 col-md-12 ">

                                                            <label for="pilihan_3" class="">Pilihan 3:</label>
                                                            <h4>{{ $inventaris->pilihan_03 }}</h4>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-12 ">
                                                    <label for="penanggungjawab" class="">Penanggung Jawab</label>
                                                    <h4>{{ $inventaris->penanggung_jawab }}</h4>
                                                </div>

                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class=" form-group mb-2 col-md-6">
                                                            <label for="" class="">Jumlah Barang :</label>
                                                            <h4>{{ $inventaris->jumlah }}</h4>

                                                        </div>
                                                        <div class=" form-group mb-2 col-md-6">
                                                            <label for="" class="mr-2">Kondisi :</label>
                                                            <h4>{{ $inventaris->kondisi }}</h4>

                                                        </div>
                                                        <div class="form-group mb-2 col-md-12 ">
                                                            <label for="" class="mr-2">Pilihan 4:</label>
                                                            <h4>{{ $inventaris->pilihan_04 }}</h4>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 col-md-12">
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="" class="mr-2">Nomer Urut :</label>
                                                            <h4>{{ $inventaris->nomor_urut }}</h4>
                                                        </div>


                                                        <div class="form-group mb-2 col-md-6 ">
                                                            <label for="" class="mr-2">Tahun Pembelian :</label>
                                                            <h4>{{ $inventaris->tahun_pembelian }}</h4>
                                                        </div>

                                                        <div class="form-group mb-2 col-md-12">
                                                            <label for="" class="mr-2">Pilihan 5:</label>
                                                            <h4>{{ $inventaris->pilihan_05 }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
@endsection
        
