@extends('layouts.master')
@section('title', 'AGENDA | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>List Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Jumlah Page View Website -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Welcome Admin <span>| List Agenda</span></h5>
                    <div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a type="button" class="btn btn-primary bi bi-plus-circle" href="/dashboard/agenda-add"> Tambah Agenda</a>
                        </div>
                    </div>
                    <div class="col-3">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Daftar Agenda</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Rekrutmen PT. Buana Varia Komputama</td>
                          <td>
                            <a class="btn btn-sm btn-primary" href="/dashboard/agenda-edit"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-sm btn-primary" onclick="return confirm('anda yakin ingin hapus?');"><i class="bi bi-trash"></i></a>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                </div>

        <!-- Right side columns -->
        <div class="col-lg-4">
        </div>
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->   
@endsection