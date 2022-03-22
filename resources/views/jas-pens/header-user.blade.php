<nav class="navbar navbar-expand-md navbar-dark py-3 fixed-top">
    <div class="d-flex w-50 order-0">
        <img class="navbar-brand mr-1" src="{{ url('/img/logojas.png') }}" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link px-3" href="#">Beranda <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="/homepage/akreditasi">Akreditasi</a>
            </li>

            <li class="nav-item dropdown text-center px-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-xl-block d-none"></span>
                    <span class="d-none d-sm-inline">Info Lowongan</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item py-2" href="#">Action</a>
                    <a class="dropdown-item py-2" href="#">Another action</a>
                    <a class="dropdown-item py-2" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" style="white-space: nowrap" href="#">Telusur Alumni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="/homepage/tentang">Tentang</a>
            </li>
        </ul>

    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last">
        <button type="button" style="white-space: nowrap; font-weight:700; font-size: 1.1rem;"
            class="px-3 py-2 btn btn-warning">Halo, Ahmad<i
                class="pl-2 fa fa-arrow-circle-right"></i></button>
    </span>
</nav>