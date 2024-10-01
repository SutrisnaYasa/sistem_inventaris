@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Inventaris </h1>
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
                                    <option value="semua"> Semua Lantai</option>
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
                            <input class="form-control" type="text" name="cari" placeholder="Search" aria-label="Search" value="{{ request()->get('cari') }}" >
                        </div>
                        <div>
                            <button class="btn btn-primary my-2 my-sm-0" type="submit" value="cari">Search</button>
                            <input class="btn btn-success my-2 my-sm-0" type="submit" name="export" value="export">
                        </div>
                    </div>    
                </div>
            </form>
                      
            <div class="card ">
                <div class="card-header">
                    <div class="card-section">
                        <button class="btn btn-primary" onclick="print_data()"><i class="fas fa-print"> Print</i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div id="print-area">
                            <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-md-3 mb-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 style="font-size: 80% ; text-align:center" class="mx-auto d-block">
                                                    {{ $item->nama_barang }}
                                                </h6>
                                            </div>
                                            <div class="col-md-12">
                                                <img class=" mx-auto d-block "
                                                    src=" data:image/png;base64,
                                                                                                                                                                                                                                                                                                                {{ DNS2D::getBarcodePNG('http://inventaris.primakara.ac.id/detail' . '/' . $item->nomor_inventaris, 'QRCODE', 5, 5) }}"
                                                    alt="barcode" srcset=""
                                                    style="width:165px !important ; height:165px !important">


                                            </div>
                                            <div class="col-md-12">
                                                <a href="{{ route('detail', $item->nomor_inventaris) }}">
                                                    <span class="text-center mx-auto d-block " style="font-size: 10px;"><img
                                                            style="margin-right: 10px;" src="{{ asset('logo.png') }}"
                                                            width="50px">{{ $item->nomor_inventaris }}</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            Halaman : {{ $data->currentPage() }} <br />
                            Jumlah Data : {{ $data->total() }} <br />
                            Data Per Halaman : {{ $data->perPage() }} <br />


                        </div>
                        <div class="mx-auto">{{ $data->appends(request()->input())->links() }}</div>--}}

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
@section('script')
    <script>
        function print_data() {
            let originalConten = document.body.innerHTML;
            let printArea = document.getElementById('print-area').innerHTML;

            let printWindow = window.open("", "wnd");
            printWindow.document.write(document.documentElement.outerHTML);
            printWindow.document.body.innerHTML = printArea;
            
            
            //document.body.innerHTML = printArea;
            
            //window.print();

            //document.body.innerHTML = originalConten;
        }

    </script>
@endsection


