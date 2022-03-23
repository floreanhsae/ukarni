@extends('jas-pens.master-user')
@section('title', 'INFO REKRUTMEN | JAS PENS')
@section('content')
<br>
<br>
<br>
<br>
<body>
    <br>
    <div class="container">
        <h1>Apply Rekrutmen PT. Home Credit Indonesia</h1>
        <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA PERSONAL</h5>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NRP</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Universitas</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenjang</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="3">Magister</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jurusan / Program Studi</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">IPK</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tahun Lulus</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Posisi Rekrutmen</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="3">Magister</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Curriculum Vitae</label>
                            <p>[Unggah dalam format file .pdf | Maks 400 Kb]</p>
                            <input type="file" class="form-control" aria-descril>
                        </div>
                </form>
                    <a href="#" class="btn btn-primary">Daftar Rekrutmen</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<br>
<br>
@endsection