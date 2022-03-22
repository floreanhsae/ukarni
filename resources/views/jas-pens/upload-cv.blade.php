@extends('jas-pens.master-user')
@section('title', 'UPLOAD CV | JAS PENS')
@section('content')

<body>
    <br>
    <div class="container">
        <h1>Data Personal</h1>
    <div class="row">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">INFORMASI & LOGIN</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">NP/NRP/NIM</th>
                            <td>3120500016</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>waridunnafis@gmail.com</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <h5 class="card-title">DATA PERSONAL</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>Waridun Nafis</td>
                        </tr>
                        <tr>
                            <th scope="row">Telepon</th>
                            <td>081335xxxxxxx</td>
                        </tr>
                        <tr>
                            <th scope="row">Universitas</th>
                            <td>PENS</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenjang</th>
                            <td>Sarjana</td>
                        </tr>
                        <tr>
                            <th scope="row">Jurusan/Program Studi</th>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <th scope="row">IPK</th>
                            <td>4.00</td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Lulus</th>
                            <td>2023</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary">Perbarui Data</a>
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
                    <a href="#" class="btn btn-primary">Unggah</a>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
@endsection