<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use App\User;


class PetugasController extends Controller
{
            public function index(Request $request)
              {
                $data_petugas = User::all();
                return view('petugas.index',['data_petugas' => $data_petugas]);
              }

            public function tambah(Request $id)
              {
                return view('petugas.tambah');
              }
              public function create(request $data)
              {
                   User::create([
                      'name' => $data['name'],
                      'email' => $data['email'],
                      'password' => bcrypt($data['password']),
                  ]);
                    return redirect('/dashboard/petugas')->with('sukses','Data Sudah Masuk');

              }
          public function edit($id)
          {
              $petugas = User::find($id);

             return view('/petugas/edit', ['petugas' => $petugas]);
          }
          public function update(Request $request,$id)
          {
            $user = User::find($id);
            $data=[
              'name'=>$request->name,
              'email'=>$request->email,
              ];
              if(!empty($request->password)){
                $data['password'] = bcrypt($request->password);
              }
            $user->update($data);
            return redirect('/dashboard/petugas')->with('sukses','Data Berhasil di Update');
          }
          public function delete($id_petugas)
          {
            $petugas = User::find($id_petugas);
            $petugas->delete();
            return redirect('/dashboard/petugas')->with('sukses','Data berhasil Dihapus');
          }
}
