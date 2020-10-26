<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
	<title>Laporan Pembayaran Spp</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pembayaran Spp</h4>
	</center>

	<table id="costumers">
			<tr>
				<th>No</th>
				<th>NISN</th>
				<th>Nama Petugas</th>
				<th>Tanggal Bayar</th>
				<th>Bulan Di bayar</th>
				<th>Tahun DIbayar</th>
				<th>Tahun SPP</th>
				<th>Jumlah Bayar</th>
			</tr>
			@php $i=1; $total=0; @endphp
			@foreach($pembayaran as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->tgl_bayar}}</td>
				<td>{{$p->bulan_dibayar}}</td>
				<td>{{$p->tahun_dibayar}}</td>
				<td>{{$p->tahun}}</td>
				<td>Rp.{{number_format($p->jumlah_bayar,2,',','.')}}</td>
			</tr>
			@php $total+=$p->jumlah_bayar @endphp
			@endforeach
			<tr>
				<td colspan="7">Total</td>
				<td>{{ 'Rp. '.number_format($total,2,',','.') }}</td>
			</tr>
	</table>

</body>
</html>
