@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Spp</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/kelas/create" method="POST">
        {{ csrf_field() }}
        <label class="fname">Nama Kelas</label><br>
          <input type="text" id="fname" name="nama_kelas" placeholder=" Nama Kelas">
        <label class="fname">Kompetensi keahlian</label>
          <input type="text" id="fname" name="kompetensi_keahlian" placeholder=" Kompetensi Keahlian">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
