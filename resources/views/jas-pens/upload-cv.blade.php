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
        <h1 class="tittle-utama">Data Personal</h1>
        <br>
    <div class="row">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title tittle-login">INFORMASI & LOGIN</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row" class="tittle-th">NP/NRP/NIM</th>
                            <td>: 3120500007</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Email</th>
                            <td>: ahmadRasyid@gmail.com</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <h5 class="card-title tittle-login">DATA PERSONAL</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row" class="tittle-th">Nama</th>
                            <td>: Ahmad Rasyid</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Telepon</th>
                            <td>: 081335xxxxxxx</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Universitas</th>
                            <td>: PENS</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Jenjang</th>
                            <td>: Sarjana</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Jurusan/Program Studi</th>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">IPK</th>
                            <td>: 4.00</td>
                        </tr>
                        <tr>
                            <th scope="row" class="tittle-th">Tahun Lulus</th>
                            <td>: 2023</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="/homepage/upload-cv-edit" class="btn btn-primary">Perbarui Data</a>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title tittle-login">CURRICULUM VITAE</h5>
                    {{-- <p class="card-text">[Unggah dalam format file .pdf | Maks. 400Kb ]</p> --}}
                    <form>
                    <div class="mb-3">
                        {{-- <label for="formFile" class="form-label"> [Unggah dalam format file .pdf | Maks. 400Kb] </label> --}}
                        <p class="info-CV">[Unggah dalam format file .pdf | Maks 400 Kb]</p>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <a href="#" class="btn btn-primary">Unggah</a>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<br>
@endsection