@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                <li class="breadcrumb-item active">Form Edit Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Form Edit Produk</label>
                    <a href="/produk" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <label> Harga Jual</label>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Jumlah</label>
                                            <input type="text" class="form-control form-control-sm" id="jumlah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="paket" class="form-label">Satuan</label>
                                            <select class="js-example-basic-single" style="width: 100%" name="state">
                                                <option value=""></option>
                                                <option value="AL">Dus</option>
                                                <option value="WY">Lusin</option>
                                                <option value="AL">Bungkus</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control form-control-sm" id="harga">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-journal-plus"></i>
                                            Tambahkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <label for="fotoNota" class="form-label">Foto Produk</label>
                                                    <input type="file" class="form-control form-control-sm"
                                                        id="fotoNota">
                                                </div>
                                                <div class="col-lg-7">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Produk</th>
                                                                <th>Harga Modal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Indomie Goreng</td>
                                                                <td>112.000 / 1 Dus<br>56.000 / 20 Bungkus<br>29.000 / 10
                                                                    Bungkus</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <th>Satuan</th>
                                                        <th>Harga Jual</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Bungkus</td>
                                                        <td>Rp 6.500</td>
                                                        <td>
                                                            <a href="" class="btn btn-danger btn-sm"><i
                                                                    class="bi bi-trash-fill"></i>
                                                                Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Bungkus</td>
                                                        <td>Rp 3.500</td>
                                                        <td>
                                                            <a href="" class="btn btn-danger btn-sm"><i
                                                                    class="bi bi-trash-fill"></i>
                                                                Hapus</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button type="submit" class="btn btn-primary float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </main>
@endsection
