<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use App\Spp;


class SppController extends Controller
{
            public function index(Request $request)
              {
                $data_spp = Spp::all();
                return view('spp.index',['data_spp' => $data_spp]);
              }

            public function tambah(Request $id_spp)
              {
                return view('spp.tambah');
              }
            public function create(Request $data)
              {
                Spp::create([
               'id_spp' => $data['id_spp'],
               'tahun' => $data['tahun'],
               'nominal' => $data['nominal'],
              ]);
                return redirect('/dashboard/spp')->with('sukses','Data Sudah Masuk');
          }
          public function edit($id_spp)
          {
              $spp = Spp::find($id_spp);

             return view('/spp/edit', ['spp' => $spp]);
          }
          public function update(Request $request,$id_spp)
          {
            $spp = Spp::find($id_spp);
            $data=[
              'id_spp'=>$request->id_spp,
              'tahun'=>$request->tahun,
              'nominal'=>$request->nominal,
              ];
            $spp->update($data);
            return redirect('/dashboard/spp')->with('sukses','Data Berhasil di Update');
          }
          public function delete($id_spp)
          {
            $spp = Spp::find($id_spp);
            $spp->delete();
            return redirect('/dashboard/spp')->with('sukses','Data berhasil Dihapus');
          }
}
