<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
    <div class="container">
        <img class="navbar-brand mr-1" src="{{ url('/img/logojas.png') }}" href="#">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link px-3" href="/homepage">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="/homepage/akreditasi">Akreditasi</a>
          </li>
          <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lowongan Kerja</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/homepage/info-lowongan">Info Lowongan</a></li>
              <li><a class="dropdown-item" href="/homepage/info-rekrutmen">Info Rekrutmen</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" style="white-space: nowrap" href="/homepage/telusur-alumni">Telusur Alumni</a>
        </li>
        <li class="nav-item">
            <a class="nav-link px-3" href="/homepage/tentang">Tentang</a>
        </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last">
        <a href="/homepage/upload-cv" type="button" style="white-space: nowrap; font-weight:700; font-size: 1.1rem;"
            class="px-3 py-2 btn btn-warning">Halo, Ahmad<i
                class="pl-2 fa fa-arrow-circle-right"></i></a>
    </span>
</nav>
