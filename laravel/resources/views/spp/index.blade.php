
@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold;">Data Spp</h3>
</div>
</div>

<div class="content">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Spp
       <a href="{{env('APP_URL')}}dashboard/spp/tambah">
         <button type="button" name="" class="tombol" style="margin-left: 1.5rem !important;">Tambah Data Spp</button></a></h5>
</div>
<table id="costumers">
<tr>
  <th>No.</th>
  <th>ID Spp</th>
  <th>Tahun Spp</th>
  <th>Nominal</th>
  <th style="text-align:center">Action</th>
</tr>
<tr>
  @foreach($data_spp as $spp)
  <td>{{ $loop->iteration}}.</td>
  <td>{{$spp->id_spp}}</td>
  <td>{{$spp->tahun}}</td>
  <td>Rp.{{number_format($spp->nominal)}}</td>
  <td><a id="myBtn" href="{{env('APP_URL')}}dashboard/spp/{{$spp->id_spp}}/delete" style="background-color:#d9534f">Delete</a>
  <a id="myBtn" href="{{env('APP_URL')}}dashboard/spp/{{$spp->id_spp}}/edit" style="background-color:#f0ad4e">Edit</a></td>

</tr>
  @endforeach
</table>

</div>
@endsection
