@extends('navbar')

@section('content')
@if($alert = Session::get('alert'))
<script>alert('{{ $alert }}');</script>
@endif
<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Transaksi Pembayaran SPP</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/transaksi/create" method="POST" style="border: 1px solid rgba(0, 40, 100, 0.12);">
        {{ csrf_field() }}

        <input type="hidden" class="field" name="nisn" placeholder="NISN" value="{{$siswa->nisn}}"><br>

        <label class="fname" style="padding-left:30px;">Pilihan NISN :</label>
        <input type="text" id="fname" class="date" name="tgl_bayar"value="{{$siswa->nisn}}" style="width:30%" disabled="">
        <label class="fname">Bulan Dibayar &nbsp &nbsp &nbsp&nbsp </label>
        <select id="fname" name="bulan_dibayar" style="width:30%">
          <option value="januari">Januari</option>
          <option value="februari">Februari</option>
          <option value="maret">Maret</option>
          <option value="april">April</option>
          <option value="mei">Mei</option>
          <option value="juni">Juni</option>
          <option value="juli">Juli</option>
          <option value="agustus">Agustus</option>
          <option value="september">September</option>
          <option value="oktober">Oktober</option>
          <option value="november">November</option>
          <option value="desember">Desember</option>
        </select>
        <label class="fname">Harus Membayar :</label>
        <input type="text"  name="tahun_dibayar" value="Rp.{{number_format($data_siswa->nominal,2,',','.')}}"  style="width:30%" disabled="">

        <input type="hidden" id="fname" name="id_spp" placeholder="Id Spp" value="{{$siswa->id_spp}}">
        <label class="fname">Jumlah Bayar&nbsp</label>

        <input type="number" class="number" name="jumlah_bayar" placeholder="Tulis Yang Akan Dibayar.." value="{{$siswa->nominal}}"  style="width:30%">


        <input type="submit" class="simpan"></button>
    </form>
  </div>
</div>

@endsection
