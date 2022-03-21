@extends('layouts.master')
@section('title', 'REKRUTMEN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>Add List Rekrutmen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Rekrutmen / Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
  
              <!-- Jumlah Page View Website -->
              <div class="col-12">
                <div class="card">
  
                  <div class="card-body">
                      <h5 class="card-title">Welcome Admin <span>| Add List Rekrutmen</span></h5>
                      <div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">https://jas.pens.ac.id/app/rekrutmen/</label>
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
                                <button type="button" class="btn btn-primary bi bi-plus-circle"> Perusahaan</button>
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Tanggal & Jam Pelaksanaan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-descril>
                                <span class="input-group-text">S/D</span>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Tutup Apply</label>
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