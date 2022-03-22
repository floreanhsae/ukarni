@extends('layouts.master')
@section('title', 'REKRUTMEN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>List Rekrutmen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">List Rekrutmen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Jumlah Page View Website -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Welcome Admin <span>| List Rekrutmen</span></h5>
                    <div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a type="button" class="btn btn-primary bi bi-plus-circle" href="/dashboard/rekrutmen-add"> Tambah Rekrutmen</a>
                        </div>
                    </div>
                    <div class="col-3">
                    <form class="d-flex">
                      <input class="form-control me-2 ds-input" type="search" placeholder="Search" aria-label="Search" id="search-input">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Daftar Rekrutmen</th>
                          <th scope="col">List</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Lowongan PT. Phase Delta Control (PDC)</td>
                        <td>
                            <a href="/dashboard/rekrutmen-list-peserta">[List Peserta] •</a>
                            <a href="/dashboard/rekrutmen-list-posisi">[List Posisi] •</a>
                            <a href="/dashboard/rekrutmen-list-data">[List Data]</a>
                        </td>
                          <td>
                            <a class="btn btn-sm btn-primary" href="/dashboard/rekrutmen-edit"><i class="bi bi-pencil-square"></i></a>
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