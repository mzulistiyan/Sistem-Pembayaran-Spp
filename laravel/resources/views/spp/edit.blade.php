@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Siswa</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/spp/{{$spp->id_spp}}/update" method="POST">
        {{ csrf_field() }}

        <label class="fname">ID Kelas</label>
          <input type="text" class="field" name="id_kelas" placeholder="Id Kelas" value="{{$spp->id_spp}}" required autofocus><br>
        <label class="fname">Nama Kelas</label><br>
          <input type="text" id="fname" name="tahun" placeholder="Nama Kelas" value="{{$spp->tahun}}">
        <label class="fname">Kompetensi keahlian</label>
          <input type="text" id="fname" name="nominal" placeholder="Kompetensi Keahlian" value="{{$spp->nominal}}">
        <input type="submit" class="simpan"></input>
    </form>
  </div>
</div>
@endsection
