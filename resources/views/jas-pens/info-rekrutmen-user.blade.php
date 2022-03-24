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
        <h1 class="tittle-utama">Info Rekrutmen Perusahaan</h1>
        <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                        <form class="d-flex">
                            <input class="form-control me-2 search-table" type="search" placeholder="Search for Rekrutmen " aria-label="Search">
                            {{-- <button class="btn btn-primary" type="submit">Search</button> --}}
                        </form>
                        </div>
                        <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Tanggal Terbit</th>
                            <th scope="col">Rekrutmen</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                        </thead>
                        <tbody class="text-tbody">
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td>Rekrutmen</td>
                            <td><a href="url" class="text-tbody">Perusahaan</a></td>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td>Rekrutmen</td>
                            <td><a href="url" class="text-tbody">Perusahaan</a></td>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td>Rekrutmen</td>
                            <td><a href="url" class="text-tbody">Perusahaan</a></td>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td>Rekrutmen</td>
                            <td><a href="url" class="text-tbody">Perusahaan</a></td>
                            <td>Deskripsi</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection