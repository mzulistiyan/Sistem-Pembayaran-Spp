@extends('navbar')

@section('content')
<div class="judul">
  <h3 style="margin-left:80px; font-weight: bold; ">Transaksi Pembayaran SPP</h3>
</div>
<div class="kotak" style="width:90%; margin-left:80px; border: 1px solid #ccc;">



  <div class="kiri" style="background-color:white; ">
    <div class="tigaa" style="margin-right:35rem;">
      <p style=" font-weight: bold; padding-top:10px;">Cari Berdasarkan NISN </p>
      <form action="{{ env('APP_URL')}}dashboard/transaksi/carinisn" method="GET">
            <input type="text" name="carinisn" placeholder="Cari NISN .." value="{{ old('cari') }}" style="width:15%; padding: 0px 0px; margin-bottom:30px; margin: 0px 0px 20px 0px;">
            <input type="submit" id="myBtnCariTrans" value="CARI"  >
      </form>
    </div>
  </div>
</div>


<div class="content" style="margin-bottom:20px;">
  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:15px;">Data Siswa</h5>
</div>
  <table id="costumers">
  <tr>
    <th>No.</th>
    <th>NISN</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Nama Kelas</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Tahun SPP</th>
    <th style="text-align:center">Action</th>
  </tr>
  <tr>
    @foreach($data_siswa as $siswa)
    <td>{{$loop->iteration}}.</td>
    <td>{{$siswa->nisn}}</td>
    <td>{{$siswa->nis}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->nama_kelas}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->no_telp}}</td>
    <td>{{$siswa->tahun}}</td>
    <td>
    <a id="myBtn" href="{{env('APP_URL')}}dashboard/transaksi/{{$siswa->nisn}}/bayar" style="background-color:#46A049">Bayar</a></td>

  </tr>
  @endforeach
  </table>
  {{ $data_siswa->links() }}
</div>

@endsection
