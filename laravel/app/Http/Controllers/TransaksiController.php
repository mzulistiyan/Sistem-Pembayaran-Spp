<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use App\Siswa;
use App\Kelas;
use App\Pembayaran;
use App\Spp;
use Auth;
class TransaksiController extends Controller
{
                      public function transaksi(Request $request)
                      {
                        $data_siswa = Siswa::join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('spp','siswa.id_spp','=','spp.id_spp')->paginate(2);
                        return view('transaksi.transaksi',['data_siswa' => $data_siswa]);
                      }
                      public function carinisn(Request $request)
                      {
                        // menangkap data pencarian
                        $carinisn = $request->carinisn;

                            // mengambil data dari table pegawai sesuai pencarian data
                        $data_siswa = DB::table('siswa')
                        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
                        ->join('spp','siswa.id_spp','=','spp.id_spp')
                          ->where('nama','like',"%".$carinisn."%")->orWhere('nisn', 'like',"%".$carinisn."%")->paginate();

                            // mengirim data pegawai ke view index
                        return view('transaksi.transaksi',['data_siswa' => $data_siswa]);

                      }

                      public function bayar($nisn)
                      {
                          $data_siswa = Siswa::join('spp','siswa.id_spp','=','spp.id_spp')->find($nisn);
                          $siswa = Siswa::find($nisn);

                         return view('/transaksi/bayar', ['siswa' => $siswa,'data_siswa' => $data_siswa]);
                      }
                      public function create(Request $data)
                        {
                          $spp = Spp::find($data['id_spp']);
                          if($data['jumlah_bayar'] < $spp->nominal){
                            return redirect('/dashboard/transaksi/'.$data['nisn'].'/bayar')->with('alert','Jumlah Bayar Kurang');

                          } else {
                            Pembayaran::create([
                           'id' => Auth::user()->id,
                           'nisn' => $data['nisn'],
                           'tgl_bayar' => Date('y-m-d'),
                           'bulan_dibayar' => $data['bulan_dibayar'],
                           'tahun_dibayar' => Date('Y'),
                           'id_spp' => $data['id_spp'],
                           'jumlah_bayar' => $data['jumlah_bayar'],
                          ]);
                          return redirect('/dashboard/transaksi')->with('alert','Transaksi berhasil');

                          }


                    }

}
