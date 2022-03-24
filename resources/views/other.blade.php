@extends('layouts.master')
@section('title', 'OTHER | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>Other</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Other</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
  
              <!-- Jumlah Page View Website -->
              <div class="col-12">
                <div class="card">
  
                  <div class="card-body">
                      <h5 class="card-title">Welcome Admin <span>| Other / Edit Profile</span></h5>
                      <div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="text" class="form-control" aria-descril>
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

      <section class="section dashboard">
        <div class="row">
  
              <!-- Jumlah Page View Website -->
              <div class="col-12">
                <div class="card">
  
                  <div class="card-body">
                      <h5 class="card-title">Welcome Admin <span>| Other / Web Configuration</span></h5>
                      <div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tittle Web</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keyword</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
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
<br>
<br>
  </main><!-- End #main -->  
@endsection