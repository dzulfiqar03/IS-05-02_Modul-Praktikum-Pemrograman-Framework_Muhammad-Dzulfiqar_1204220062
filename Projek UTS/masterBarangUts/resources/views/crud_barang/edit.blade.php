<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    @vite('resources/sass/app.scss')
</head>

<body>

    @extends('layouts.app')
    @section('content')
        <div class="py-2 px-3">

            <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="row justify-content-center">
                    <div class="py-3 px-5 bg-light rounded-3 border col-xl-6  w-100">
                        <div class="mb-3 text-center">
                            <i class="bi-box fs-1"></i>
                            <h4 class="fw-bold">Edit Data Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kode_barang" class="form-label">Kode Produk</label>
                                <input class="form-control
            @error('kode_barang') is-invalid @enderror"
                                    type="text" name="kode_barang" id="kode_barang"
                                    value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}"
                                    placeholder="Masukkan Kode Produk">
                                @error('kode_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input class="form-control @error('nama_barang')
            is-invalid @enderror"
                                    type="text" name="nama_barang" id="nama_barang"
                                    value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}"
                                    placeholder="Masukkan Nama Barang">
                                @error('nama_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga_barang" class="form-label">Harga Barang</label>
                                <input class="form-control @error('harga_barang')
            is-invalid @enderror"
                                    type="text" name="harga_barang" id="harga_barang"
                                    value="{{ $errors->any() ? old('harga_barang') : $barang->harga_barang }}"
                                    placeholder="Masukkan Harga Barang">
                                @error('harga_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="desc_barang" class="form-label">Deskripsi Barang</label>
                                <input class="form-control @error('desc_barang')
            is-invalid @enderror"
                                    type="text" name="desc_barang" id="desc_barang"
                                    value="{{ $errors->any() ? old('desc_barang') : $barang->desc_barang }}"
                                    placeholder="Masukkan Deskripsi Barang">
                                @error('desc_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <select name="satuan" id="satuan" class="form-select bg-warning">
                                    @php
                                        $selected = '';
                                        if ($errors->any()) {
                                            $selected = old('satuan');
                                        } else {
                                            $selected = $barang->satuan_id;
                                        }
                                    @endphp
                                    @foreach ($satuan as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            {{ $selected == $satuan->id ? 'selected' : '' }}>
                                            {{ $satuan->nama_satuan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('satuan')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle
            me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark
            btn-lg mt-3"><i
                                        class="bi-check-circle me-2"></i> Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection

    @vite('resources/js/app.js')
</body>

</html>
