@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanja</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <label> Kalkulator Belanja</label>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-4">
                                <form>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Pilihan Produk</label>
                                            <select class="js-example-basic-single" style="width: 100%" name="state">
                                                <option value=""></option>
                                                <option value="AL">Indomie Goreng / 20 Bungkus</option>
                                                <option value="WY">Indomie Goreng / 1 Dus</option>
                                                <option value="AL">Teh Pucuk / 1 Dus</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="banyakProduk" class="form-label">Jumlah</label>
                                            <input type="number" class="form-control form-control-sm" id="banyakProduk">
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
                            <div class="card mb-4">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama Produk</th>
                                                <th>Paket</th>
                                                <th>Harga Per Paket</th>
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
                                                <td>Rp 56.000</td>
                                                <td class="text-center">1</td>
                                                <td>Rp 56.000</td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-danger btn-sm"><i
                                                            class="bi bi-trash-fill"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td>Teh Gelas</td>
                                                <td>1 Dus</td>
                                                <td>Rp 19.500</td>
                                                <td class="text-center">1</td>
                                                <td>Rp 19.500</td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-danger btn-sm"><i
                                                            class="bi bi-trash-fill"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-text">
                                        Catatan :
                                        <ul>
                                            <li>Harga dan total harga hanya berupa perkiraan modal yang harus dikeluarkan
                                                untuk belanja.</li>
                                            <li>Harga beli dan total harga tidak akan dicetak pada nota belanja.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer d-flex">
                                    <label class="float-right ms-auto">
                                        <h3 class="fw-bold">Total Harga : Rp 75.500</h3>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button type="submit" class="btn btn-primary float-right ms-auto"><i class="bi bi-printer"></i>
                                        Buat Nota</button>
                </div>
            </div>
        </div>
    </main>
@endsection
