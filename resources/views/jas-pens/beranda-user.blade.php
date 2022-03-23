@extends('jas-pens.master-user')
@section('title', 'BERANDA | JAS PENS')
@section('content')
<nav class="navbar navbar-expand-md navbar-dark py-3">
    <div class="d-flex w-50 order-0">
        <img class="navbar-brand mr-1" src="{{ url('/img/logojas.png') }}" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link px-3" href="#">Beranda <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#">Akreditasi</a>
            </li>
            <li class="nav-item dropdown text-center px-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-xl-block d-none"></span>
                    <span class="d-none d-sm-inline">Info Lowongan</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item py-2" href="#">Action</a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item py-2" href="#">Another action</a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item py-2" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" style="white-space: nowrap" href="#">Telusur Alumni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#">Tentang</a>
            </li>
        </ul>

    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last">
        <a type="button" style="white-space: nowrap; font-weight:700; font-size: 1.1rem;"
            class="px-3 py-2 btn btn-warning" href="/homepage/login-regis">Buat Akun / Login<i
                class="pl-2 fa fa-arrow-circle-right"></i></a>
    </span>
</nav>

    <div class="wl-textbox .col-12 .col-sm-6 .col-lg-8">
        <h1 class="welcome-text">Selamat Datang Alumni PENS!</h1>
        <h4 class="welcome-description">Temukan Pekerjaan Impianmu Disini dan Wujudkan Masa Depan Gemilang!</h4>
    </div>
    <div class=".col-6 .col-lg-4">
        <div class="tm-section tm-section-1 float-right">
            <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                <h2 class="tm-text-blue mb-4">Webinar</h2>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum convallis faucibus. In
                    quis
                    sapien tincidunt ex aliquam consectetur. Nam consequat sapien a ultrices luctus.
                </p>
                <p class="mb-3">
                    At Zoom Meeting
                </p>
                <p class="mb-3">
                    13:30 - 16:00 WIB
                </p>
            </div>
        </div>
    </div>
@endsection

