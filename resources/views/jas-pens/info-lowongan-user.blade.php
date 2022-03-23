@extends('jas-pens.master-user')
@section('title', 'INFO LOWONGAN | JAS PENS')
@section('content')
<br>
<br>
<br>
<br>
<body>
    <br>
    <div class="container">
        <h1>Info Lowongan Kerja</h1>
        <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search for Lowongan " aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        </div>
                        <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Tanggal Terbit</th>
                            <th scope="col">Lowongan Kerja</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Deadline</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><a href="url">Lowongan Kerja</a></td>
                            <td>Deskripsi</td>
                            <td>Deadline</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><a href="url">Lowongan Kerja</a></td>
                            <td>Deskripsi</td>
                            <td>Deadline</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><a href="url">Lowongan Kerja</a></td>
                            <td>Deskripsi</td>
                            <td>Deadline</td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td><a href="url">Lowongan Kerja</a></td>
                            <td>Deskripsi</td>
                            <td>Deadline</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<br>
<br>
@endsection