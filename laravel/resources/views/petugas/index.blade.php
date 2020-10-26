
@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold;">Data Kelas</h3>
</div>
</div>

<div class="content">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Petugas
       <a href="{{env('APP_URL')}}dashboard/petugas/tambah">
         <button type="button" name="" class="tombol" style="margin-left: 1.5rem !important;">Tambah Data Petugas</button></a></h5>
</div>
<table id="costumers">
<tr>
  <th>No.</th>
  <th>Id Petugas</th>
  <th>Nama Petugas</th>
  <th>Username</th>
  <th style="text-align:center">Action</th>
</tr>
<tr>
  @foreach($data_petugas as $petugas)
  <td>{{ $loop->iteration}}.</td>
  <td>{{$petugas->id}}</td>
  <td>{{$petugas->name}}</td>
  <td>{{$petugas->email}}</td>
  <td><a id="myBtn" href="{{env('APP_URL')}}dashboard/petugas/{{$petugas->id}}/delete" style="background-color:#d9534f">Delete</a>
  <a id="myBtn" href="{{env('APP_URL')}}dashboard/petugas/{{$petugas->id}}/edit" style="background-color:#f0ad4e">Edit</a></td>

</tr>
  @endforeach
</table>

</div>
@endsection
