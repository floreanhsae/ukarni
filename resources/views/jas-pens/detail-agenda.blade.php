@extends('jas-pens.master-user')
@section('title', 'DETAIL AGENDA | JAS PENS')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <body>
        <div class="container pageleftbox">
            <h1 class="tittle-utama">Agenda PT Ayang Sejahtera</h1>
            <h5 class="tittle-utama">Jl. Raya ITS, Keputih, Kec. Sukolilo,
                Kota SBY</h5>
            <br>
            <div class="row">
                <div class="col-sm-7">
                    <p>ini isinya tentang penjelasan agenda, bisa ada gambar brosur,
                        bisa apa aja deh pokoknya disini tuh isi dari penjelasan agenda yang diberikan
                    </p>
                    <br>
                    <div class="container">
                        <img class="img-fluid" src="{{ url('/img/loker1.jpeg') }}" alt="lokerimg">
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Deadline: 23 / 03 / 2022</h5>
                        <div class="card-body">
                            <h5 class="card-title">Profile Perusahaan : PT. Daesang Ingredients Indonesia</h5>
                            <p class="card-text">Perusahaan ini bla bla blaaa</p>
                        </div>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title tittle-login">Agenda</h4>
                            {{-- <p class="card-text">[Unggah dalam format file .pdf | Maks. 400Kb ]</p> --}}
                            <div class="card agenda">
                                <div class="card-body">
                                    <a href="url" class="agenda-tittle">Webinar</a>
                                    <p>01 Mei 2022</p>
                                    <p>at Zoom Meeting</p>
                                    <p>13:30 - 16:00 WIB</p>
                                </div>
                            </div>
                            <div class="card agenda">
                                <div class="card-body">
                                    <a href="url" class="agenda-tittle">Webinar</a>
                                    <p>01 Mei 2022</p>
                                    <p>at Zoom Meeting</p>
                                    <p>13:30 - 16:00 WIB</p>
                                </div>
                            </div>
                            <div class="card agenda">
                                <div class="card-body">
                                    <a href="url" class="agenda-tittle">Webinar</a>
                                    <p>01 Mei 2022</p>
                                    <p>at Zoom Meeting</p>
                                    <p>13:30 - 16:00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <br>
@endsection
