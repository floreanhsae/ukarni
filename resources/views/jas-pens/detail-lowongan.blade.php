@extends('jas-pens.master-user')
@section('title', 'DETAIL LOWONGAN | JAS PENS')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <body>
        <div class="container pageleftbox">
            <h1 class="tittle-utama">lowongan PT Ayang Sejahtera</h1>
            <h5 class="tittle-utama">Jl. Raya ITS, Keputih, Kec. Sukolilo,
                Kota SBY</h5>
            <br>
            <div class="row">
                <div class="col-sm-7">
                    <p>ini isinya tentang penjelasan lowongan, bisa ada gambar brosur,
                        bisa apa aja deh pokoknya disini tuh isi dari penjelasan lowongan yang diberikan
                    </p>
                    <br>
                    <div class="container">
                        <img class="img-fluid" src="{{ url('/img/loker1.jpeg') }}" alt="lokerimg">
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Deadline: 23 / 03 / 2022</h5>
                        <div class="card-body">
                          <h5 class="card-title">PT Ayang Sejahtera</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In est velit, semper sit amet ullamcorper a, blandit in ante. In finibus erat quis dui finibus, sagittis sollicitudin risus dignissim. Integer id aliquet nunc, ac dictum libero. Sed tempus auctor augue, quis suscipit nibh ullamcorper id. Sed laoreet tellus est, vestibulum volutpat lorem maximus at. Phasellus quis gravida tortor, a tempor magna. Phasellus in auctor lectus, sed fringilla arcu. Nulla facilisi. Phasellus rutrum, est in aliquam tempus, orci turpis dignissim leo, quis auctor urna arcu non sem.</p>
                          <a href="#" class="btn btn-primary">Daftar Langsung</a>
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
                            <br>
                            <div class="card agenda">
                                <div class="card-body">
                                    <a href="url" class="agenda-tittle">Webinar</a>
                                    <p>01 Mei 2022</p>
                                    <p>at Zoom Meeting</p>
                                    <p>13:30 - 16:00 WIB</p>
                                </div>
                            </div>
                            <br>
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
@endsection
