@extends('jas-pens.master-user')
@section('title', 'UPLOAD CV | JAS PENS')
@section('content')
<br>
<br>
<br>
<br>
<body>
    <br>
    <div class="container">
        <h1>Data Personal</h1>
        <br>
    <div class="row">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">INFORMASI & LOGIN</h5>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NP/NRP/NIM</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" aria-descril>
                        </div>
                </form>
                    <br>
                    <h5 class="card-title">DATA PERSONAL</h5>
                    <form>
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
                </form>
                    <a href="#" class="btn btn-primary">Perbarui</a>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CURRICULUM VITAE</h5>
                    {{-- <p class="card-text">[Unggah dalam format file .pdf | Maks. 400Kb ]</p> --}}
                    <form>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> [Unggah dalam format file .pdf | Maks. 400Kb] </label>
                        <input class="form-control" type="file">
                    </div>
                    <a href="#" class="btn btn-primary">Perbarui</a>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<br>
<br>
@endsection