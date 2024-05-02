<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Home</title>

    @vite('resources/sass/app.scss')

</head>

<body class="overflow-hidden">

    <div class="text-center vw-auto mt-4 vh-100 ">
        <h3 class="mb-3 sayText px-2 rounded">Hello</h3>
        <div class="container text-center  mt-2">
            <div class="row align-items-center">
                <div class="col nim fw-bold">
                    1204220062
                </div>
                <div class="col">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="{{ Vite::asset('resources/images/myImg.png') }}" width="690px" alt="image"
                                    class="d-block w-10 m-auto">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-dark fw-bold" href="{{ url('listBarang') }}">Home</a>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item ">
                                <img src="{{ Vite::asset('resources/images/myImg2.png') }}" width="690px"
                                    alt="image" class="d-block w-10 m-auto">
                                <div class="carousel-caption d-none d-md-block mt-5">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-dark" href="{{ url('home') }}">Home</a>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item ">
                                <img src="{{ Vite::asset('resources/images/myImg3.png') }}" width="690px"
                                    alt="image" class="d-block w-10 m-auto">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-dark" href="{{ url('home') }}">Home</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col ttlUts fw-bold">
                    UTS <br> <span class="subTxt">Framework</span>
                </div>
            </div>
        </div>

        <div class="col mt-2">

        </div>









    </div>


    @vite('resources/js/app.js')

</body>

</html>
