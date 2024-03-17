<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muhammad Dzulfiqar Web Portofolio</title>
    @vite('resources/sass/myweb_portofolio.scss')
    <link href="https://fonts.googleapis.com/css?family=Lilita One" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/tugas1.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair Display" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Manrope" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="allSect">
        <!-- Navigasi -->
        <nav class="navbar navbar-expand-lg header">
            <div class="container-fluid">
                <div class="logo">
                    <a class="navbar-brand" href="#">Muhammad Dzulfiqar Web Portofolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div id="navbarNavDropdown">
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#pertama"
                                onclick="return smoothScroll('pertama')">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kedua" onclick="return smoothScroll('kedua')">Experiences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ketiga" onclick="return smoothScroll('ketiga')">Address</a>
                        </li>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            <button class="btn btn-outline-success text-black" type="submit">
                                Search
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section id="pertama" class="hero">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carouselSect d-flex flex-row">
                            <div class="leftSect m-auto">
                                <div class="nameSect fs-1">
                                    <p>
                                        Hello, my name is<br /><span class="name">Muhammad Dzulfiqar</span>
                                    </p>
                                </div>
                                <div class="descSec w-10">
                                    <p>
                                        I am an active people, hardworking and also
                                        responsibility. I have<br />experience in making an
                                        advertising design for a home-based company.<br />My
                                        focuses is in the field about the information, data,
                                        design, and<br />programming. My strength are having good
                                        relatationship with<br />everyone, make a decision , and
                                        organization skill.
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm fw-bold text-black">
                                    Project
                                </button>
                                <button type="button" class="btn btn2 btn-secondary btn-sm fw-bold text-white">
                                    Book A Call
                                </button>
                            </div>
                            <img src="{{ Vite::asset('resources/images/img1.png') }}" class="d-block" width="588"
                                alt="..." />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carouselSect d-flex flex-row">
                            <div class="leftSect m-auto">
                                <div class="nameSect fs-1">
                                    <p>
                                        Hello, my name is<br /><span class="name">Muhammad Dzulfiqar</span>
                                    </p>
                                </div>
                                <div class="descSec w-10">
                                    <p class="">
                                        I am an active people, hardworking and also
                                        responsibility. I have<br />experience in making an
                                        advertising design for a home-based company.<br />My
                                        focuses is in the field about the information, data,
                                        design, and<br />programming. My strength are having good
                                        relatationship with<br />everyone, make a decision , and
                                        organization skill.
                                    </p>
                                </div>
                            </div>
                            <img src="{{ Vite::asset('resources/images/img2.png') }}" class="d-block" width="588"
                                alt="..." />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carouselSect d-flex flex-row">
                            <div class="leftSect m-auto">
                                <div class="nameSect fs-1">
                                    <p>
                                        Hello, my name is<br /><span class="name">Muhammad Dzulfiqar</span>
                                    </p>
                                </div>
                                <div class="descSec w-10">
                                    <p class="">
                                        I am an active people, hardworking and also
                                        responsibility. I have<br />experience in making an
                                        advertising design for a home-based company.<br />My
                                        focuses is in the field about the information, data,
                                        design, and<br />programming. My strength are having good
                                        relatationship with<br />everyone, make a decision , and
                                        organization skill.
                                    </p>
                                </div>
                            </div>
                            <img src="{{ Vite::asset('resources/images/img3.png') }}" class="d-block" width="588"
                                alt="..." />
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="kedua" class="expSect p-5 reveal">
            <div class="title">
                <h1 class="text-center p-5">What You Want Know About Me?</h1>
            </div>
            <div class="col justify-content-center">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <button class="pt-4">
                                <img src="{{ Vite::asset('resources/images/iconSkill.png') }}" alt="image" />
                                <h1>Skills</h1>
                                <p>
                                    I am ready to be your employee with my skill which is your
                                    company need.
                                </p>
                            </button>
                        </div>
                        <div class="col">
                            <button class="pt-4">
                                <img src="{{ Vite::asset('resources/images/iconSchool.png') }}" alt="" />
                                <h1>Education</h1>
                                <p>
                                    I am ready to be your employee with my history education
                                    which is your company need.
                                </p>
                            </button>
                        </div>
                        <div class="col">
                            <button class="pt-5">
                                <img src="{{ Vite::asset('resources/images/iconExperience.png') }}" alt="" />
                                <h1>Experience</h1>
                                <p>
                                    I am ready to be your employee with my experience which is
                                    your company need.
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Address Section -->
        <section id="ketiga" class="addSect reveal">
            <div class="d-flex flex-row">
                <div class="leftSect m-auto text-center">
                    <div class="nameSect fs-1 text-center">
                        <p class="name">Address</p>
                    </div>
                    <p>
                        Riau Road E-24 RW-07/RT-01, Sidorukun Village, Gresik District
                    </p>

                    <p class="city fs-5">Gresik City</p>
                    <p>61112</p>
                </div>
                <img src="{{ Vite::asset('resources/images/address.png') }}" class="d-block" width="588"
                    alt="..." />
            </div>
        </section>

        <!-- Footer -->
        <footer class="p-2">
            <h5 class="text-center">Copyright @2024 Muhammad Dzulfiqar</h5>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @vite('resources/js/myweb_portofolio.js')
</body>

</html>
