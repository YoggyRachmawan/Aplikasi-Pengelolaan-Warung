@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarProduk">Produk</a></li>
                <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Form Edit Produk</label>
                    <a href="/daftarProduk" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
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
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control form-control-sm" id="harga">
                                        </div>
                                        <div class="mb-3">
                                            <label for="paket" class="form-label">Satuan</label>
                                            <select class="js-example-basic-single" style="width: 100%" name="state">
                                                <option value="">--Pilih Satuan--</option>
                                                <option value="AL">Bungkus</option>
                                                <option value="WY">2 Bungkus</option>
                                                <option value="AL">Renceng</option>
                                            </select>
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
                                                                <td>112.000 / Dus<br>56.000 / 1/2 Dud<br>29.000 / 1/4 Dus
                                                                </td>
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
                                                        <th>Harga Jual</th>
                                                        <th>Satuan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rp 6.500</td>
                                                        <td>2 Bungkus</td>
                                                        <td>
                                                            <a href="" class="btn btn-danger btn-sm"><i
                                                                    class="bi bi-trash-fill"></i>
                                                                Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rp 3.500</td>
                                                        <td>Bungkus</td>
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
