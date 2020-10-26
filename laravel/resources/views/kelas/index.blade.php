
@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold;">Data Kelas</h3>
</div>
</div>

<div class="content">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Kelas
       <a href="{{env('APP_URL')}}dashboard/kelas/tambah">
         <button type="button" name="" class="tombol" style="margin-left: 1.5rem !important;">Tambah Data Kelas</button></a></h5>
</div>
<table id="costumers">
<tr>
  <th>No.</th>
  <th>Id Kelas</th>
  <th>Nama Kelas</th>
  <th>Kompetensi keahlian</th>
  <th style="text-align:center">Action</th>
</tr>
<tr>
  @foreach($data_kelas as $kelas)
  <td>{{ $loop->iteration}}.</td>
  <td>{{$kelas->id_kelas}}</td>
  <td>{{$kelas->nama_kelas}}</td>
  <td>{{$kelas->kompetensi_keahlian}}</td>
  <td><a id="myBtn" href="{{env('APP_URL')}}dashboard/kelas/{{$kelas->id_kelas}}/delete" style="background-color:#d9534f">Delete</a>
  <a id="myBtn" href="{{env('APP_URL')}}dashboard/kelas/{{$kelas->id_kelas}}/edit" style="background-color:#f0ad4e">Edit</a></td>

</tr>
  @endforeach
</table>

</div>
@endsection
