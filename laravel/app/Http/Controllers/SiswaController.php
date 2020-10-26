<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Cookie;
use App\Siswa;
use App\Kelas;
use App\Spp;

class SiswaController extends BaseController
{

              public function show(Request $id_kelas)
                {
                  $pilih_kelas = Kelas::all();
                  $pilih_spp = Spp::all();
                  return view('siswa.tambah',['pilih_kelas' => $pilih_kelas],['pilih_spp' => $pilih_spp]);
                }
            public function index(Request $request)
              {
                $data_siswa = Siswa::join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('spp','siswa.id_spp','=','spp.id_spp')->paginate(6);
                return view('siswa.index',['data_siswa' => $data_siswa]);
              }

            public function create(Request $data)
              {
                Siswa::create([
               'nisn' => $data['nisn'],
               'nis' => $data['nis'],
               'nama' => $data['nama'],
               'id_kelas' => $data['id_kelas'],
               'alamat' => $data['alamat'],
               'no_telp' => $data['no_telp'],
               'id_spp' => $data['id_spp'],
              ]);
                return redirect('/dashboard/siswa')->with('sukses','Data Sudah Masuk');
          }
          public function cari(Request $request)
            	{
            		// menangkap data pencarian
            		$cari = $request->cari;

                		// mengambil data dari table pegawai sesuai pencarian data
            		$data_siswa = DB::table('siswa')
                ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
                ->join('spp','siswa.id_spp','=','spp.id_spp')
                ->where('nisn','like',"%".$cari."%")->paginate();

                		// mengirim data pegawai ke view index
            		return view('siswa.index',['data_siswa' => $data_siswa]);

            	}
          public function edit($nisn)
          {
              $pilih_kelas = Kelas::all();
              $pilih_spp = Spp::all();
              $siswa = Siswa::find($nisn);

             return view('/siswa/edit', ['pilih_spp' => $pilih_spp, 'siswa' => $siswa,'pilih_kelas' => $pilih_kelas]);
          }
          public function update(Request $request,$nisn)
          {
            $siswa = Siswa::find($nisn);
            $data=[
              'nisn'=>$request->nisn,
              'nis'=>$request->nis,
              'nama'=>$request->nama,
              'id_kelas'=>$request->id_kelas,
              'alamat'=>$request->alamat,
              'no_telp'=>$request->no_telp,
              'id_spp'=>$request->id_spp,
              ];
            $siswa->update($data);
            return redirect('/dashboard/siswa')->with('sukses','Data Berhasil di Update');
          }
          public function destroy($nisn)
          {
            $siswa = Siswa::find($nisn);
            $siswa->destroy();
            return redirect('/dashboard/siswa')->with('sukses','Data berhasil Dihapus');
          }
}
