@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Inventaris</h1>
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
                    <form class="form-inline" action="" method="GET">
                        <div class=" form-group  mb-2">
                            <div class=" form-group  mx-sm-2">
                                <select class="form-control" name="lokasi_lantai" id="lokasi_lantai">
                                    <option value=""> Pilih Lantai</option>
                                    @foreach ($lokasi_lantais as $lokasi_lantai)
                                    <option value="{{ $lokasi_lantai }}" {{ request()->get('lokasi_lantai') == $lokasi_lantai? 'selected' : ''}}> {{ $lokasi_lantai }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="kategori_barang" id="kategori_barang">
                                    <option value=""> Pilih Kategori</option>
                                    @foreach ($kategori_barangs as $kategori_barang)
                                    <option value="{{ $kategori_barang }}" {{ request()->get('kategori_barang') == $kategori_barang? 'selected' : ''}}> {{ $kategori_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control" name="kondisi" id="kondisi">
                                    <option value=""> Pilih Kondisi</option>
                                    @foreach ($kondisis as $kondisi)
                                    <option value="{{ $kondisi }}" {{ request()->get('kondisi') == $kondisi? 'selected' : ''}}> {{ $kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="jenis_barang" id="jenis_barang">
                                    <option value=""> Pilih Jenis Barang</option>
                                    @foreach ($jenis_barangs as $jenis_barang)
                                    <option value="{{ $jenis_barang }}" {{ request()->get('jenis_barang') == $jenis_barang? 'selected' : ''}}> {{ $jenis_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mx-sm-2">
                                <select class="form-control"  name="tahun_pembelian" id="tahun_pembelian">
                                    <option value=""> Pilih Tahun Pembelian</option>
                                    @foreach ($tahun_pembelians as $tahun_pembelian)
                                    <option value="{{ $tahun_pembelian }}" {{ request()->get('tahun_pembelian') == $tahun_pembelian? 'selected' : ''}}> {{ $tahun_pembelian }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group mx-sm-2">
                            <input class="form-control" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ request()->get('cari') }}">
                        </div>
                        <div>
                            <button class="btn btn-primary my-2 my-sm-0" type="submit" value="cari">Search</button>
                            <input class="btn btn-success my-2 my-sm-0" type="submit" name="export" value="export">
                        </div>                        
                        
                    </div>    
                </div>
            </form>


            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nama</td>
                                    <td>Jumlah</td>
                                    <td>Jenis Barang</td>
                                    <td>Kategori Barang</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_inventaris as $key => $inventaris)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $inventaris->nama_barang }}</td>
                                        <td>{{ $inventaris->jumlah }}</td>
                                        <td>{{ $inventaris->jenis_barang }}</td>
                                        <td>{{ $inventaris->kategori_barang }}</td>
                                        <td>
                                            <a href="{{ route('barcode-data.edit', $inventaris->id) }}"
                                                class="btn  btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('barcode-data.show', $inventaris->id) }}"
                                                class="btn btn-sm btn-warning"><i class="fas fa-info"></i></a>
                                            <button
                                                onclick="delete_form('{{ $inventaris->id }}', '{{ $inventaris->nama_barang }}')"
                                                class="btn  btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!--{{ $data_inventaris->render() }}--> {{ $data_inventaris->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <form id="form_delete" action="" method="POST">
        @csrf
        @method('DELETE');
    </form>
@endsection
@section('script')
    <script>
        function delete_form(id, nama_barang) {
            let isHapus = confirm('Apakah Yakin Menghapus Inventaris ' + nama_barang + ' ini ');
            if (isHapus) {
                let form = $('#form_delete');
                let action = "{!!  route('barcode-data.store') !!}";
                action += "/" + id;
                form.attr('action', action);
                form.submit();
            }
        }

    </script>
@endsection
