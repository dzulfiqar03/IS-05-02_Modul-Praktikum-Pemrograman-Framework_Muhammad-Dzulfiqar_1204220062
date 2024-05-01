<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    @vite('resources/sass/app.scss')
</head>

<body>

    @extends('layouts.app')
    @section('content')
        <div class="py-2 px-3">
            <div class="row justify-content-center">
                <div class="py-3 px-5 bg-light rounded-3 border col-xl-6  w-100">
                    <div class="mb-3 text-center">
                        <i class="bi-box fs-1"></i>
                        <h4 class="fw-bold">Detail Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <h5>{{ $barang->kode_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <h5>{{ $barang->nama_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <h5>{{ $barang->harga_barang }}</h5>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="desc_barang" class="form-label">Deskripsi Barang</label>
                            <h5>{{ $barang->desc_barang }}</h5>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="nama_satuan" class="form-label">Satuan</label>
                            <h5>{{ $barang->satuan->nama_satuan }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('listBarang') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
        me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @vite('resources/js/app.js')
</body>

</html>
