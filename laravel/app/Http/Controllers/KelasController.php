<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use App\Kelas;


class KelasController extends Controller
{
            public function index(Request $request)
              {
                $data_kelas = Kelas::all();
                return view('kelas.index',['data_kelas' => $data_kelas]);
              }

            public function tambah(Request $id_kelas)
              {
                return view('kelas.tambah');
              }
            public function create(Request $data)
              {
                Kelas::create([
               'nama_kelas' => $data['nama_kelas'],
               'kompetensi_keahlian' => $data['kompetensi_keahlian'],
              ]);
                return redirect('/dashboard/kelas')->with('sukses','Data Sudah Masuk');
          }
          public function edit($id_kelas)
          {
              $kelas = Kelas::find($id_kelas);

             return view('/kelas/edit', ['kelas' => $kelas]);
          }
          public function update(Request $request,$id_kelas)
          {
            $kelas = Kelas::find($id_kelas);
            $data=[
              'id_kelas'=>$request->id_kelas,
              'nama_kelas'=>$request->nama_kelas,
              'kompetensi_keahlian'=>$request->kompetensi_keahlian,
              ];
            $kelas->update($data);
            return redirect('/dashboard/kelas')->with('sukses','Data Berhasil di Update');
          }
          public function delete($id_kelas)
          {
            $kelas = Kelas::find($id_kelas);
            $kelas->delete();
            return redirect('/dashboard/kelas')->with('sukses','Data berhasil Dihapus');
          }
}
