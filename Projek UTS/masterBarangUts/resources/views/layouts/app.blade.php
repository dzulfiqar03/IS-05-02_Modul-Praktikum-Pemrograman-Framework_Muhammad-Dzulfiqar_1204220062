<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="d-flex">
        <div class="leftContent p-2 gap-50 vh-100" id="leftContent">
            <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/logo.png') }}" width="200px" alt="image">

            <div class="w-100">
                <div class="d-grid">
                    <a class="btn btn-warning fw-bold btnReg mb-3" href="{{ route('listBarang') }}">Daftar Barang</a>
                    <a class="btn  btn-dark btnBack" href="{{ url('home') }}">Kembali</a>

                </div>
            </div>
        </div>

        <div class="col rightContent vh-100">
            @include('layouts.nav')
            @yield('content')

        </div>
    </div>


    @vite('resources/js/app.js')

</body>

</html>
