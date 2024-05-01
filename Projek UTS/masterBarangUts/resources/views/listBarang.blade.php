<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Menu</title>
    @vite('resources/sass/app.scss')

</head>

<body>

    <div class="text-center">
        <div class="d-flex">
            <div class="leftContent p-2 gap-50 vh-100" id="leftContent">
                <img class="mx-auto mb-5" src="{{ Vite::asset('resources/images/logo.png') }}" width="200px"
                    alt="image">

                <div class="w-100">
                    <div class="d-grid">
                        <a class="btn btn-warning fw-bold btnReg mb-3">Daftar Barang</a>
                        <a class="btn  btn-dark btnBack" href="{{ url('home') }}">Kembali</a>

                    </div>


                </div>
            </div>
            <div class="col rightContent vh-100">
                @include('layouts.nav')
                <div class="container mt-4">
                    <div class="row mb-0">
                        <div class="col-lg-9 col-xl-10">
                        </div>
                        <div class="col-lg-3 col-xl-2">
                            <div class="d-grid gap-2">
                                <a href="{{ route('barang.create') }}" class="btn btn-warning fw-bold">Create barang</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive border p-3 rounded-3">
                        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                            <thead>
                                <tr class="bg-warning">
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Deskripsi Barang</th>
                                    <th>Satuan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $barang)
                                    <tr>
                                        <td>{{ $barang->kode_barang }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->harga_barang }}</td>
                                        <td>{{ $barang->desc_barang }}</td>
                                        <td>{{ $barang->satuan->nama_satuan }}</td>
                                        <td>@include('crud_barang.actions')</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @vite('resources/js/app.js')

</body>

</html>
