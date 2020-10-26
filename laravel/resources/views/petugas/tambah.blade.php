@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Petugas</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/petugas/create" method="POST">
        {{ csrf_field() }}
        <label class="fname">Nama Petugas</label><br>
          <input type="text"  name="name" placeholder="Nama Petugas">
        <label class="fname">Username Petugas</label>
          <input type="text"  name="email" placeholder="Username">
        <label class="fname">Password Petugas</label>
          <input type="password" id="fname" name="password" placeholder="Password">
        <label class="fname">Confirm Password Petugas</label>
          <input type="password" id="fname" name="password_confirmation" required placeholder="Confirm Password">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
