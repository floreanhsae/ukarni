@extends('jas-pens.master-user')
@section('title', 'LOGIN & REGISTRASI | JAS PENS')
@section('content')
<br>
<br>
<br>
<br>
<body>
    <br>
    <div class="container">
        <h1 class="tittle-utama">Buat Akun Anda Disini</h1>
        <br>
    <div class="row">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NP/NRP/NIM</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Universitas</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                        <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <form
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login Here!</h5>
                    {{-- <p class="card-text">[Unggah dalam format file .pdf | Maks. 400Kb ]</p> --}}
                    <form>
                    <div class="mb-3">
                        <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required placeholder="Enter your email here">
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required placeholder="Password">
                      <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                    <a href="#" class="btn btn-primary">Login</a>
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