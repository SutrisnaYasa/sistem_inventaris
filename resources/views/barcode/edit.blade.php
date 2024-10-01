@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Barang</h1>
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
                            @method('PUT');
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <div class=" form-group  mb-2 col-md-12">
                                            <label for="" class="mr-4">Nama Barang :</label>
                                            <input type="text" name="nama_barang" id="nama_barang"
                                                value="{{ $inventaris->nama_barang }}" class="form-control  ">
                                        </div>
                                        <div class=" form-group  mb-2 col-md-12">
                                            <label for="" class="mr-4">Nomor Inventaris :</label>
                                            <input type="text" name="nomor_inventaris" id="nomor_inventaris"
                                                value="{{ $inventaris->nomor_inventaris }}" class="form-control ">
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Jenis Barang :</label>
                                                    <input type="text" name="jenis_barang" id="jenis_barang"
                                                        class="form-control " value="{{ $inventaris->jenis_barang }}">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Jenis Barang :</label>
                                                    <input type="text" name="kode_jenis_barang" id="kode_jenis_barang"
                                                        value="{{ $inventaris->kode_jenis_barang }}" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kategori Barang :</label>
                                                    <input type="text" name="kategori_barang" id="kategori_barang"
                                                        value="{{ $inventaris->kategori_barang }}" class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Kategori Barang :</label>
                                                    <input type="text" name="kode_kategori" id="kode_kategori_barang"
                                                        value="{{ $inventaris->kode_kategori }}" class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-12">
                                                    <label for="" class="">Pilihan :</label>
                                                    <input type="text" name="pilihan" id="pilihan"
                                                        value="{{ $inventaris->pilihan }}" class="form-control ">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group  mb-2 col-md-6">
                                                    <label for="" class="">Kode Lokasi :</label>
                                                    <input type="text" name="kode_lokasi" id="kode_lokasi"
                                                        value="{{ $inventaris->kode_lokasi }}" class="form-control ">
                                                </div>
                                                <div class=" form-group  mb-2 col-md-6"> <label for="" class="">Lokasi
                                                        :</label> <input type="text" name="lokasi" id="lokasi"
                                                        value="{{ $inventaris->lokasi }}" class="form-control ">
                                                </div>

                                                <div class=" form-group  mb-2 col-md-12"> <label for="" class=""> Pilihan 2
                                                        :</label> <input type="text" name="pilihan_02" id="pilihan_02"
                                                        value="{{ $inventaris->pilihan_02 }}" class="form-control ">
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="row">
                                        <div class="form-group mb-2 col-md-12 ">
                                            <label for="penanggungjawab" class="">Penanggung Jawab</label>
                                            <input type="text" name="penanggung_jawab" id="penanggung_jawab"
                                                value="{{ $inventaris->penanggung_jawab }}" class="form-control ">

                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="lokasi_lantai" class="">Lokasi Lantai:</label>
                                                    <input type="text" name="lokasi_lantai" id="lokasi_lantai"
                                                        value="{{ $inventaris->lokasi_lantai }}" class="form-control ">

                                                </div>
                                                <div class="form-group mb-2 col-md-6 ">

                                                    <label for="kode_lantai" class="mr-2">Kode Lantai :</label>
                                                    <input type="text" name="kode_lantai" id="kode_lantai"
                                                        value="{{ $inventaris->kode_lantai }}" class="form-control ">
                                                </div>
                                                <div class="form-group   mb-2 col-md-12 ">

                                                    <label for="pilihan_3" class="">Pilihan 3:</label>
                                                    <input type="text" name="pilihan_03" id="pilihan_03"
                                                        value="{{ $inventaris->pilihan_03 }}" class="form-control ">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class=" form-group mb-2 col-md-6">
                                                    <label for="" class="">Jumlah Barang :</label>
                                                    <input type="text" name="jumlah_barang" id="jumlah_barang"
                                                        class="form-control " value="{{ $inventaris->jumlah }}">

                                                </div>
                                                <div class=" form-group mb-2 col-md-6">
                                                    <label for="" class="mr-2">Kondisi :</label>
                                                    <input type="text" class="form-control  " name="kondisi"
                                                        value="{{ $inventaris->kondisi }}" id="kondisi">

                                                </div>
                                                <div class="form-group mb-2 col-md-12 ">
                                                    <label for="" class="mr-2">Pilihan 4:</label>
                                                    <input type="text" class="form-control  " name="pilihan_04"
                                                        value="{{ $inventaris->pilihan_04 }}" id="pilihan_04">

                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <div class="row">
                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="" class="mr-2">Nomer Urut :</label>
                                                    <input type="text" class="form-control  " name="nomor_urut"
                                                        value="{{ $inventaris->nomor_urut }}" id="nomor_urut">
                                                </div>


                                                <div class="form-group mb-2 col-md-6 ">
                                                    <label for="" class="mr-2">Tahun Pembelian :</label>
                                                    <input type="number" class="form-control " name="tahun_pembelian"
                                                        value="{{ $inventaris->tahun_pembelian }}" id="jumlah_buka">
                                                </div>

                                                <div class="form-group mb-2 col-md-12">
                                                    <label for="" class="mr-2">Pilihan 5:</label>
                                                    <input type="text" class="form-control  " name="pilihan_05"
                                                        value="{{ $inventaris->pilihan_05 }}" id="pilihan_05">
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
        </section>
    </div>
@endsection
