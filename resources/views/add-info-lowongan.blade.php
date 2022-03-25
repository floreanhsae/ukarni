@extends('layouts.master')
@section('title', 'INFO LOWONGAN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>Add List Info Lowongan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Info Lowongan / Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
  
              <!-- Jumlah Page View Website -->
              <div class="col-12">
                <div class="card">
  
                  <div class="card-body">
                      <h5 class="card-title">Welcome Admin <span>| Add List Info Lowongan</span></h5>
                      <div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">https://jas.pens.ac.id/app/lowongan/</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Post</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Perusahaan</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                              <a type="button" class="btn btn-primary bi bi-plus-circle" href="/dashboard/info-lowongan-add-perusahaan"> Perusahaan</a>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Deadline</label>
                                <input type="date" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Isi</label>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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