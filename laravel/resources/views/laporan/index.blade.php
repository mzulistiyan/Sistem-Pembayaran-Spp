@extends('navbar')

@section('content')
<head>

</head>
<div class="form">

  <div class="tittle">
    <h5 style="font-weight: bold; margin-left:25px; margin-top:18px;">Laporan</h5>
  </div>

  <div class="tambah">
      <form action="{{env('APP_URL')}}dashboard/cetak_pdf" method="get" style="border: 1px solid rgba(0, 40, 100, 0.12);">
        {{ csrf_field() }}
        <br>

        <label class="fname">From</label>
        <input type="date" class="date" name="dari"  value="" style="width:38%">
        <label class="fname">Until</label>
        <input type="date" class="date" name="hingga" value=""  style="width:38%">

        <input type="submit" class="simpan"></button>
    </form>
  </div>
</div>

@endsection
