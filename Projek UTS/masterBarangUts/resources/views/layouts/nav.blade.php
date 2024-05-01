<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="sideCont d-flex">
            <div class="btnTgl1" id="btnTgl1">
                <button class="navbar-toggler" type="button" id="toogleBtn" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>

            <div class="btnTgl2" id="btnTgl2">
                <button class="navbar-toggler backToogle" type="button" id="backToogle" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand px-3" href="#">List Barang</a>
            </div>
        </div>

        <button class="navbar-toggler bg-warning text-dark p-2" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <i class="bi-person-circle"></i>
            My Profile
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">My Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <img class="rounded-circle" src="{{ Vite::asset('resources/images/myProfile.jpg') }}"
                            width="100px" alt="image">
                    </li>
                    <li class="nav-item">
                        <h5 class="fw-bold">Muhammad Dzulfiqar</h5>
                    </li>
                    <li class="nav-item">
                        <h6>1204220062</h6>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            See Me and Know Me More Detail
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item"
                                    href="https://www.linkedin.com/in/muhammaddzulfiqar-/">Linkedin</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://github.com/dzulfiqar03">Github</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
