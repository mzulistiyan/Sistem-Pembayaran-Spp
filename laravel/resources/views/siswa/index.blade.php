
@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold; ">Data Siswa</h3>
  <div class="cari" style="float:right; margin-bottom:40px;">
    <p style="margin-left:25px;">Cari Siswa:</p>
      <form action="{{ env('APP_URL')}}dashboard/siswa/cari" method="GET">
	<input type="text" class="cari" name="cari" placeholder="Cari Siswa .." value="{{ old('cari') }}" style=" width:50%; height:2vh; ">
	<input type="submit" id="myBtnCari" value="CARI" >
      </form>
  </div>
</div>

<div class="content">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Siswa
       <a href="{{env('APP_URL')}}dashboard/siswa/show">
         <button type="button" name="" class="tombol" style="margin-left: 1.5rem !important;">Tambah Data Siswa</button></a></h5>
</div>
<table id="costumers">
<tr>
  <th>Nisn</th>
  <th>Nis</th>
  <th>Nama</th>
  <th>Nama Kelas</th>
  <th>Alamat</th>
  <th>No Telp</th>
  <th>ID SPP</th>
  <th style="text-align:center">Action</th>
</tr>
<tr>
  @foreach($data_siswa as $siswa)
  <td>{{$siswa->nisn}}</td>
  <td>{{$siswa->nis}}</td>
  <td>{{$siswa->nama}}</td>
  <td>{{$siswa->nama_kelas}}</td>
  <td>{{$siswa->alamat}}</td>
  <td>{{$siswa->no_telp}}</td>
  <td>{{$siswa->tahun}}</td>
  <td><a id="myBtn" href="{{env('APP_URL')}}dashboard/siswa/{{$siswa->nisn}}/destroy" style="background-color:#d9534f">Delete</a>
  <a id="myBtn" href="{{env('APP_URL')}}dashboard/siswa/{{$siswa->nisn}}/edit" style="background-color:#f0ad4e">Edit</a></td>

</tr>
  @endforeach
</table>

</div>
@endsection
