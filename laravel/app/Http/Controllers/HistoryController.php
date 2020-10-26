<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Pembayaran;
use App\Spp;
use Auth;
class HistoryController extends Controller
{
              public function history(Request $request)
              {
                $data_pembayaran = Pembayaran::join('spp','pembayaran.id_spp','=','spp.id_spp')
                ->join('siswa','pembayaran.nisn','=','siswa.nisn')
                ->paginate(10);
                return view('history.history',['data_pembayaran' => $data_pembayaran]);
              }
                    public function carinama(Request $request)
                  {
                    // menangkap data pencarian
                    $carinama = $request->carinama;

                        // mengambil data dari table pegawai sesuai pencarian data
                    $data_pembayaran = DB::table('pembayaran')
                    ->join('spp','pembayaran.id_spp','=','spp.id_spp')->join('siswa','pembayaran.nisn','=','siswa.nisn')
                    ->where('nama','like',"%".$carinama."%")->get();

                        // mengirim data pegawai ke view index
                    return view('history.history',['data_pembayaran' => $data_pembayaran]);

                  }
                      public function carinisn(Request $request)
                      {
                        // menangkap data pencarian
                        $carinisn = $request->carinisn;

                            // mengambil data dari table pegawai sesuai pencarian data
                        $data_pembayaran = DB::table('pembayaran')
                        ->join('spp','pembayaran.id_spp','=','spp.id_spp')->join('siswa','pembayaran.nisn','=','siswa.nisn')
                        ->where('siswa.nisn','like',"%".$carinisn."%")->get ();

                            // mengirim data pegawai ke view index
                        return view('history.history',['data_pembayaran' => $data_pembayaran]);

                      }



}
