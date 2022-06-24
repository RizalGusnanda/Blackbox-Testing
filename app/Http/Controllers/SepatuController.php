<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use App\Models\Ukuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepatuController extends Controller
{
   public function index()
   {
      // mengambil data dari tabel sepatu
      $data = Sepatu::all();

      // menampilkan kembali ke halaman index dengan memberikan variabel bernama data, yang mana isi dari variabel ata adalah data semua sepatu
      return view('sepatu.index', [
         'data' => $data,
      ]);
   }
   public function create()
   {

      $ukuran = Ukuran::all();
      return view('sepatu.create', ['ukuran' => $ukuran]);
   }
   public function store(Request $request)
   {
      $sepatu = new Sepatu; //inisialisasi bentuk object variabel sepatu

      // -- masukkan isi variabel
      $sepatu->id_sepatu = $request->get('id_sepatu');
      $sepatu->brand = $request->get('brand');
      $sepatu->warna = $request->get('warna');
      $sepatu->ukuran = $request->get('ukuran');
      $sepatu->harga = $request->get('harga');
      // --

      // proses simpan
      $sepatu->save();


      // $result = [
      //    'success' => true,
      //    'msg' => 'Sepatu ' . $request->brand . ' ditambahkan'
      // ];

      return view('sepatu.index', [
         'data' => Sepatu::all(),
      ]);
   }
   public function show($id)
   {
      //menampilkan detail data dengan menemukan/berdasarkan id Sepatu
      $sepatu = Sepatu::with('ukuran')->where('id', $id)->first();
      return view('sepatu.detail', ['Sepatu' => $sepatu]);
   }
   public function edit($id)
   {
      //mengambil data dengan keterangan dimana id sepatu adalah sesuai parameter yang dipasang pada alamt ($id)
      $sepatu = Sepatu::where('id_sepatu', $id)->first();


      return view('sepatu.edit', [
         'sepatu' => $sepatu,
      ]);
   }
   public function update(Request $request)
   {

      // penyimpanan data sementara di array dengan nama newUpdateData
      $newUpdateData = ([
         'id_sepatu' => $request->id_sepatu,
         'brand' => $request->brand,
         'harga' => $request->harga,
         'warna' => $request->warna,
         'ukuran' => $request->ukuran,
      ]);

      // proses update
      Sepatu::where('id_sepatu', $newUpdateData['id_sepatu'])->update($newUpdateData);

      //jika data berhasil diupdate, akan kembali ke halaman utama
      return redirect()->route('sepatu.index')
         ->with('success', 'Sepatu Berhasil Diupdate');
   }
   public function destroy($id)
   {

      //proses hapus dengan keterangan id adalah id seperti yang dicantumkan pada parameter ($id)
      Sepatu::where('id_sepatu', $id)->delete();
      return redirect()->route('sepatu.index')
         ->with('success', 'Sepatu Berhasil Dihapus');
   }
};
