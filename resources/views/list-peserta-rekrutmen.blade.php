@extends('layouts.master')
@section('title', 'REKRUTMEN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>List Rekrutmen Peserta</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Rekrutmen Peserta</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Jumlah Page View Website -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Welcome Admin <span>| List Rekrutmen Peserta</span></h5>
                    <div class="col-3">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Universitas</th>
                        <th scope="col">Jenjang</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">TH. Lulus</th>
                        <th scope="col">IPK</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        
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