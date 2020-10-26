@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Kelas</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/kelas/{{$kelas->id_kelas}}/update" method="POST">
        {{ csrf_field() }}

        <label class="fname">ID Kelas</label>
          <input type="text" class="field" name="id_kelas" placeholder="Id Kelas" value="{{$kelas->id_kelas}}" disabled><br>
        <label class="fname">Nama Kelas</label><br>
          <input type="text" id="fname" name="nama_kelas" placeholder="Nama Kelas" value="{{$kelas->nama_kelas}}">
        <label class="fname">Kompetensi keahlian</label>
          <input type="text" id="fname" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" value="{{$kelas->kompetensi_keahlian}}">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
