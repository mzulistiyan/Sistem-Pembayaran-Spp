<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use App\Pembayaran;
use PDF;
use Illuminate\Support\Facades\Input;

class LaporanController extends Controller
{
            public function index(Request $request)
              {

                return view('laporan.index');
              }
              public function cetak_pdf(Request $request)
              {
                $data = [
                  'dari' => $request->dari,
                  'hingga' => $request->hingga,
                   'pembayaran' => Pembayaran::join('users','pembayaran.id','=','users.id'
                   )->join('spp','pembayaran.id_spp','=','spp.id_spp')
                   ->join('siswa','pembayaran.nisn','=','siswa.nisn')
                   ->whereBetween('tgl_bayar',[$request->dari, $request->hingga])->get(),'subtotal' =>  Pembayaran::join('users','pembayaran.id','=','users.id')
                   ->join('spp','pembayaran.id_spp','=','spp.id_spp')
                   ->join('siswa','pembayaran.nisn','=','siswa.nisn')
                   ->whereBetween('tgl_bayar',[$request->dari, $request->hingga])->get()
                     ];
                    $pdf = PDF::loadview('laporan.pembayaran_pdf',$data);
                    $pdf->setPaper('a4', 'landscape');
                    return $pdf->stream();
    }

}
