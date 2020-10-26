@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Kelas</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/petugas/{{$petugas->id}}/update" method="POST">
        {{ csrf_field() }}

        <label class="fname">ID Petugas</label>
          <input type="text" class="field" name="id" placeholder="Id Kelas" value="{{$petugas->id}}" disabled><br>
        <label class="fname">Nama Petugas</label><br>
          <input type="text" name="name" placeholder="Nama Kelas" value="{{$petugas->name}}">
        <label class="fname">Username Petugas</label>
          <input type="text" name="email" placeholder="Kompetensi Keahlian" value="{{$petugas->email}}">
        <label class="fname">Password Petugas</label>
            <input type="text" name="password">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
