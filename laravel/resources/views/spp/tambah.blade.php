@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Siswa</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/spp/create" method="POST">
        {{ csrf_field() }}

        <label class="fname">ID Spp</label>
          <input type="text" class="field" name="id_spp" placeholder="Id Spp"  required autofocus><br>
        <label class="fname">Nama Kelas</label><br>
          <input type="text" id="fname" name="tahun" placeholder="Tahun">
        <label class="fname">Kompetensi keahlian</label>
          <input type="text" id="fname" name="nominal" placeholder="nominal">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
