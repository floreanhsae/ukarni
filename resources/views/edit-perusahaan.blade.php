@extends('layouts.master')
@section('title', 'PERUSAHAAN | JAS PENS')
@section('content')
<main id="main" class="main h-100">

    <div class="pagetitle">
      <h1>Edit List Perusahaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">List Perusahaan / Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
  
              <!-- Jumlah Page View Website -->
              <div class="col-12">
                <div class="card">
  
                  <div class="card-body">
                      <h5 class="card-title">Welcome Admin <span>| Edit List Perusahaan</span></h5>
                      <div>
                        <form action="{{route('admin.update.perusahaan', ['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{method_field('PUT')}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="nama" class="form-control" value="{{$data->nama}}" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Daerah</label>
                                <input type="text" name="daerah" class="form-control" value="{{$data->daerah}}"  aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" aria-label="With textarea" value="{{$data->nama}}" >{{$data->deskripsi}}</textarea>
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