@extends('layouts.master')
@section('title', 'JAS | PAGE')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>List Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Jumlah Page View Website -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Welcome Admin <span>| List Page Website</span></h5>
                    <div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary bi bi-plus-circle"> Tambah Page</button>
                        </div>
                    </div>
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