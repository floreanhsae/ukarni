@extends('jas-pens.master-user')
@section('title', 'DETAIL REKRUTMEN | JAS PENS')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <body>
        <div class="container pageleftbox">
            <h1 class="tittle-utama">Rekrutmen PT Ayang Sejahtera</h1>
            <h5 class="tittle-utama">Jl. Raya ITS, Keputih, Kec. Sukolilo,
                Kota SBY</h5>
            <br>
            <div class="row">
                <div class="col-sm-7">
                    <p>ini isinya tentang penjelasan Rekrutmen, bisa ada gambar brosur,
                        bisa apa aja deh pokoknya disini tuh isi dari penjelasan Rekrutmen yang diberikan
                    </p>
                    <br>
                    <div class="container">
                        <img class="img-fluid" src="{{ url('/img/loker1.jpeg') }}" alt="lokerimg">
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">List Posisi Rekrutmen</h5>
                        <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nama Posisi</th>
                                <th scope="col">Syarat dan Ketentuan</th>
                            </tr>
                            </thead>
                            <tbody class="text-tbody">
                            <tr>
                                <td>Nama Posisi</td>
                                <td>Syarat dan Ketentuan</td>
                            </tr>
                            <tr>
                                <td>Nama Posisi</td>
                                <td>Syarat dan Ketentuan</td>
                            </tr>
                            <tr>
                                <td>Nama Posisi</td>
                                <td>Syarat dan Ketentuan</td>
                            </tr>
                            <tr>
                                <td>Nama Posisi</td>
                                <td>Syarat dan Ketentuan</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Daftar Langsung</a>
                    </div>
                    </div>
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
