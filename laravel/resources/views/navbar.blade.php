
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/icon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h3 style="margin-left:80px; font-weight: bold;">Sistem Aplikasi Pembayaran SPP | Ukom</h3>
    </div>
    <div class="nav">
      <ul>
        <li><a href="{{env('APP_URL')}}dashboard/transaksi"><i class="fe fe-repeat" ></i>Transaksi</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/kelas"><i class="fe fe-box" ></i>Kelas</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/spp"><i class="fe fe-book" ></i>SPP</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/siswa"><i class="fe fe-user" ></i>Siswa</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/petugas"><i class="fe fe-users" ></i> Petugas</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/laporan"><i class="fe fe-book-open" ></i>Laporan</a></li>
        <li><a href="{{env('APP_URL')}}dashboard/history"><i class="fe fe-bookmark" ></i>History</a></li>
        <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="fe fe-log-out" ></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
        </li>
      </ul>
    </div>

    @yield('content')
