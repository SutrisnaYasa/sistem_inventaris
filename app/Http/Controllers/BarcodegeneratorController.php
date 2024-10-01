<?php

namespace App\Http\Controllers;

use App\BarcodeModel;
use App\Exports\DataExport;
use App\Imports\DataImport;
use DB;
use Faker\Provider\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class BarcodegeneratorController extends Controller
{
    //
    public function barcode(Request $request)
    {
        
       // $result = DB::table('barcode_models')->paginate(12);
        $lokasi_lantai = DB::table('barcode_models')->select('lokasi_lantai')->distinct()->get()->pluck('lokasi_lantai')->sort();
        $kategori_barang = DB::table('barcode_models')->select('kategori_barang')->distinct()->get()->pluck('kategori_barang')->sort();
        $kondisi = DB::table('barcode_models')->select('kondisi')->distinct()->get()->pluck('kondisi')->sort();
        $jenis_barang = DB::table('barcode_models')->select('jenis_barang')->distinct()->get()->pluck('jenis_barang')->sort();
        $tahun_pembelian = DB::table('barcode_models')->select('tahun_pembelian')->distinct()->get()->pluck('tahun_pembelian')->sort();

     if (!$request->filled('lokasi_lantai') && !$request->filled('kategori_barang') && !$request->filled('kondisi') && !$request->filled('jenis_barang') && !$request->filled('tahun_pembelian') && !$request -> filled('cari')) {
         $post=[];
     }else{
        $post = BarcodeModel::query();
    
        if($request->filled('lokasi_lantai') && $request->get('lokasi_lantai') != 'semua'){
            $post = $post->where('lokasi_lantai', $request->lokasi_lantai);
        }
        if($request->filled('kategori_barang')){
            $post = $post->where('kategori_barang', $request->kategori_barang);
        }
        if($request->filled('kondisi')){
            $post = $post->where('kondisi', $request->kondisi);
        }
        if($request->filled('jenis_barang')){
            $post = $post->where('jenis_barang', $request->jenis_barang);
        }
        if($request->filled('tahun_pembelian')){
            $post = $post->where('tahun_pembelian', $request->tahun_pembelian);
        }
    
        if ($request -> filled('cari')){
            $cari = $request->cari;
    
            $post = $post->Where('nama_barang','like',"%".$cari."%")
            ->orWhere('nomor_inventaris','like',"%".$cari."%");
        } 
    
        if ($request -> filled('export')){
            $export = $request->export;
    
            return Excel::download(new DataExport($post), 'data_inventaris.xlsx');
        }
    
       
        $post= $post->get();
     }
   

        return view('barcode.index', [
            //'data' => $result,
            'lokasi_lantais' =>$lokasi_lantai,
            'kategori_barangs' =>$kategori_barang,
            'kondisis' =>$kondisi,
            'jenis_barangs' =>$jenis_barang,
            'tahun_pembelians' =>$tahun_pembelian,
            'data' =>$post,
               
        ]);

    }
    
    public function importExportView()
    {
        return view('barcode.import');
    }
    public function export()
    {
        return Excel::download(new DataExport($post), 'data_inventaris.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new DataImport, request()->file('file'));

        return back();
    }
    public function detail($id)
    {
        $inventaris = BarcodeModel::where('nomor_inventaris', $id)->firstOrFail();
        return view('barcode.detail', ['inventaris' => $inventaris]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            BarcodeModel::create([
                'id' => null,
                'nomor_inventaris' => $request->nomor_inventaris,
                'kategori_barang' => $request->kategori_barang,
                'kode_kategori' => $request->kode_kategori,
                'pilihan' => $request->pilihan,
                'jenis_barang' => $request->jenis_barang,
                'kode_jenis_barang' => $request->kode_jenis_barang,
                'nama_barang' => $request->nama_barang,
                'jumlah' => $request->jumlah_barang,
                'lokasi_lantai' => $request->lokasi_lantai,
                'pilihan_02' => $request->pilihan_02,
                'kode_lantai' => $request->kode_lantai,
                'lokasi' => $request->lokasi,
                'pilihan_03' => $request->pilihan_03,
                'kode_lokasi' => $request->kode_lokasi,
                'penanggung_jawab' => $request->penanggung_jawab,
                'kondisi' => $request->kondisi,
                'pilihan_04' => $request->pilihan_04,
                'nomor_urut' => $request->nomor_urut,
                'pilihan_05' => $request->pilihan_05,
                'tahun_pembelian' => $request->tahun_pembelian
            ]);
            return redirect()->route('barcode.create')->with('success', 'Barang Sudah Di Tambahkan');
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(
                'error',
                'Gagal Menambakan data dengan error' . $e
            );
        }
    }

    public function inventaris_all(Request $request)
    {
        //$data_inventaris = BarcodeModel::paginate(20);
        $lokasi_lantai = DB::table('barcode_models')->select('lokasi_lantai')->distinct()->get()->pluck('lokasi_lantai')->sort();
        $kategori_barang = DB::table('barcode_models')->select('kategori_barang')->distinct()->get()->pluck('kategori_barang')->sort();
        $kondisi = DB::table('barcode_models')->select('kondisi')->distinct()->get()->pluck('kondisi')->sort();
        $jenis_barang = DB::table('barcode_models')->select('jenis_barang')->distinct()->get()->pluck('jenis_barang')->sort();
        $tahun_pembelian = DB::table('barcode_models')->select('tahun_pembelian')->distinct()->get()->pluck('tahun_pembelian')->sort();

        $post = BarcodeModel::query();

        if($request->filled('lokasi_lantai')){
            $post = $post->where('lokasi_lantai', $request->lokasi_lantai);
        }
        if($request->filled('kategori_barang')){
            $post = $post->where('kategori_barang', $request->kategori_barang);
        }
        if($request->filled('kondisi')){
            $post = $post->where('kondisi', $request->kondisi);
        }
        if($request->filled('jenis_barang')){
            $post = $post->where('jenis_barang', $request->jenis_barang);
        }
        if($request->filled('tahun_pembelian')){
            $post = $post->where('tahun_pembelian', $request->tahun_pembelian);
        }

        if ($request -> filled('cari')){
            $cari = $request->cari;

            $post = $post->Where('nama_barang','like',"%".$cari."%")
            ->orWhere('nomor_inventaris','like',"%".$cari."%");
        } 

        if ($request -> filled('export')){
            $export = $request->export;

            return Excel::download(new DataExport($post), 'data_inventaris.xlsx');
        }

        $post= $post->paginate();

        return view('barcode.inventaris_all', [
        'lokasi_lantais' =>$lokasi_lantai,
        'kategori_barangs' =>$kategori_barang,
        'kondisis' =>$kondisi,
        'jenis_barangs' =>$jenis_barang,
        'tahun_pembelians' =>$tahun_pembelian,
        'data_inventaris' =>$post,
           
    ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventaris = BarcodeModel::where('id', $id)->get()->first();
        return view('barcode.show', ['inventaris' => $inventaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventaris = BarcodeModel::where('id', $id)->get()->first();
        return view('barcode.edit', ['inventaris' => $inventaris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $inventaris = BarcodeModel::find($id);
            $inventaris->nomor_inventaris = $request->nomor_inventaris;
            $inventaris->kategori_barang = $request->kategori_barang;
            $inventaris->kode_kategori = $request->kode_kategori;
            $inventaris->pilihan = $request->pilihan;
            $inventaris->jenis_barang = $request->jenis_barang;
            $inventaris->kode_jenis_barang = $request->kode_jenis_barang;
            $inventaris->nama_barang = $request->nama_barang;
            $inventaris->jumlah = $request->jumlah_barang;
            $inventaris->lokasi_lantai = $request->lokasi_lantai;
            $inventaris->pilihan_02 = $request->pilihan_02;
            $inventaris->kode_lantai = $request->kode_lantai;
            $inventaris->lokasi = $request->lokasi;
            $inventaris->pilihan_03 = $request->pilihan_03;
            $inventaris->kode_lokasi = $request->kode_lokasi;
            $inventaris->penanggung_jawab = $request->penanggung_jawab;
            $inventaris->kondisi = $request->kondisi;
            $inventaris->pilihan_04 = $request->pilihan_04;
            $inventaris->nomor_urut = $request->nomor_urut;
            $inventaris->pilihan_05 = $request->pilihan_05;
            $inventaris->tahun_pembelian = $request->tahun_pembelian;

            $inventaris->save();
            return redirect()->route('inventaris')->with('success', 'Berhasil Memperbaharui data');
        } catch (\Exception $e) {
            return redirect()->route('inventaris')->with('error', 'Gagal Memperbaharusi data dengan error ' . $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $inventaris = BarcodeModel::find($id);
            $inventaris->delete();
            return redirect()->route('inventaris')->with('success', 'Berhasil Menghapus ' . $inventaris->nama_barang);
        } catch (\Exception $e) {
            return redirect()->route('inventaris')->with('error', "Gagal Menghapus Inventaris " . $e);
        }
    }
}
