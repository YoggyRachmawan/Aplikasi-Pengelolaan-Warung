@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarBelanja">Daftar Belanja</a></li>
                <li class="breadcrumb-item"><a href="/inputNota">Input Nota</a></li>
                <li class="breadcrumb-item active">Form Input Nota</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Form Input Nota</label>
                    <a href="/inputNota" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <label> Tambahan</label>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <label> Produk Lama</label>
                                                </div>
                                                <form>
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Pilihan Produk</label>
                                                            <select class="js-example-basic-single" style="width: 100%"
                                                                name="state">
                                                                <option value=""></option>
                                                                <option value="AL">Indomie Goreng / 20 Bungkus</option>
                                                                <option value="WY">Indomie Goreng / 1 Dus</option>
                                                                <option value="AL">Teh Pucuk / 1 Dus</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="banyakProduk" class="form-label">Jumlah Beli</label>
                                                            <input type="number" class="form-control form-control-sm"
                                                                id="banyakProduk">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="bi bi-journal-plus"></i>
                                                            Tambahkan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <label> Produk Baru</label>
                                                </div>
                                                <form>
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="namaProduk" class="form-label">Nama Produk</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="namaProduk">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="paket" class="form-label">Paket</label>
                                                            <input type="text" class="form-control form-control-sm mb-2"
                                                                id="paket" placeholder="Jumlah">
                                                            <select class="js-example-basic-single" style="width: 100%"
                                                                name="state">
                                                                <option value=""></option>
                                                                <option value="AL">Dus</option>
                                                                <option value="WY">Lusin</option>
                                                                <option value="AL">Bungkus</option>
                                                            </select>
                                                            <input type="text" class="form-control form-control-sm mt-2"
                                                                id="paket" placeholder="Harga">

                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="banyakProduk" class="form-label">Jumlah Beli</label>
                                                            <input type="number" class="form-control form-control-sm"
                                                                id="banyakProduk">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-muted">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="bi bi-journal-plus"></i>
                                                            Tambahkan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th>Nama Produk</th>
                                                        <th>Paket</th>
                                                        <th class="text-center">Jumlah Beli</th>
                                                        <th>Harga Beli</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1.</td>
                                                        <td>Indomie Goreng</td>
                                                        <td>20 Bungkus</td>
                                                        <td class="text-center">1</td>
                                                        <td>
                                                            <input type="number" class="form-control form-control-sm"
                                                                id="banyakProduk">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="" class="btn btn-danger btn-sm"><i
                                                                    class="bi bi-trash-fill"></i>
                                                                Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.</td>
                                                        <td>Teh Gelas</td>
                                                        <td>1 Dus</td>
                                                        <td class="text-center">1</td>
                                                        <td>
                                                            <input type="number" class="form-control form-control-sm"
                                                                id="banyakProduk">
                                                        </td>
                                                        <td class="text-center">
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
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="fotoNota" class="form-label">Foto Nota</label>
                                                    <input type="file" class="form-control form-control-sm"
                                                        id="fotoNota">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Keterangan</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <label>Tanggal : 6/8/2024 | ID Nota : BLW0001</label>
                    <button type="submit" class="btn btn-primary float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </main>
@endsection
