@extends('navbar')

@section('content')

<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Tambah Data Siswa</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/siswa/{{$siswa->nisn}}/update" method="POST">
        {{ csrf_field() }}

        <label class="fname">NISN</label>
        <input type="text" class="field" name="nisn" placeholder="NISN" value="{{$siswa->nisn}}" required autofocus><br>
        <label class="fname">NIS</label><br>
        <input type="text" id="fname" name="nis" placeholder="NIS" value="{{$siswa->nis}}">
        <label class="fname">Nama</label>
        <input type="text" id="fname" name="nama" placeholder="NIS" value="{{$siswa->nama}}">
        <label class="fname">Kelas</label>
        <select type="text" class="fname" name="id_kelas" placeholder="NISN">
          @foreach($pilih_kelas as $kelas)
          <option class="fname"  value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}</option>
          @endforeach
        </select><br>
        <label class="fname">Alamat</label><br>
        <input type="text" id="fname" name="alamat" placeholder="NIS" value="{{$siswa->alamat}}">
        <label class="fname">No Telp</label><br>
        <input type="text" id="fname" name="no_telp" placeholder="NIS" value="{{$siswa->no_telp}}">
        <label class="fname">Id SPP</label><br>
        <select type="text" class="fname" name="id_spp" placeholder="NISN">
          @foreach($pilih_spp as $spp)

          <option class="fname"  value="{{ $spp->id_spp}}">{{ $spp->tahun }}</option>
          @endforeach
        </select>

        <input type="submit" class="simpan">Simpan</button>
    </form>
  </div>
</div>
@endsection
