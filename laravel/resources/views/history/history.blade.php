@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold; ">History Transaksi SPP</h3>
</div>
<div class="kotak" style="width:90%; margin-left:80px; border: 1px solid #ccc;">


  <div class="kiri" style="background-color:white; ">
    <div class="tigaa" style="float:left; margin-left:20px; ">
      <p style=" font-weight: bold; padding-top:10px;">Cari Berdasarkan Nama Siswa</p>
        <form action="{{ env('APP_URL')}}dashboard/history/carinama" method="GET">
            <input type="text" name="carinama" placeholder="Cari Siswa .." value="{{ old('cari') }}" style="width:60%; padding: 0px 0px;  margin: 0px 0px 20px 0px;">
            <input type="submit" id="myBtnCariTrans" value="CARI"  >
        </form>
    </div>
  </div>
  <div class="kiri" style="background-color:white; ">
    <div class="tigaa" style="margin-right:35rem;">
      <p style=" font-weight: bold; padding-top:10px;">Cari Berdasarkan NISN </p>
      <form action="{{ env('APP_URL')}}dashboard/history/carinisn" method="GET">
            <input type="text" name="carinisn" placeholder="Cari NISN .." value="{{ old('cari') }}" style="width:15%; padding: 0px 0px; margin-bottom:30px; margin: 0px 0px 20px 0px;">
            <input type="submit" id="myBtnCariTrans" value="CARI"  >
      </form>
    </div>
  </div>
</div>


<div class="content" style="margin-bottom:20px;">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Data Transaksi SPP</h5>
</div>
  <table id="costumers">
  <tr>
    <th>No.</th>
    <th>NISN</th>
    <th>Nama Siswa</th>
    <th>Tanggal bayar</th>
    <th>Bulan Bayar</th>
    <th>Tahun Bayar</th>
    <th>Tahun SPP</th>
    <th>Jumlah Bayar</th>
  </tr>
  <tr>
    @foreach($data_pembayaran as $siswa)
    <td>{{$loop->iteration}}.</td>
    <td>{{$siswa->nisn}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->tgl_bayar}}</td>
    <td>{{$siswa->bulan_dibayar}}</td>
    <td>{{$siswa->tahun_dibayar}}</td>
    <td>{{$siswa->tahun}}</td>
    <td>Rp.{{number_format($siswa->jumlah_bayar,2,',','.')}}</td>

  </tr>
  @endforeach
  </table>
</div>

@endsection
