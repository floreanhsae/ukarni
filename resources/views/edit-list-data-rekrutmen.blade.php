@extends('layouts.master')
@section('title', 'REKRUTMEN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>Edit List Data Peserta</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Data Peserta / Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Jumlah Page View Website -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Welcome Admin <span>| Edit List Data Peserta</span></h5>
                    <div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Data</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlFile1" class="form-label">File</label>
                                <input type="file" class="form-control" >
                            </div>
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                          </form>
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