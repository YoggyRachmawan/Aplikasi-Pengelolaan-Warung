@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarBelanja">Daftar Belanja</a></li>
                <li class="breadcrumb-item active">Detail Nota</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Detail Nota</label>
                    <a href="/daftarBelanja" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card mb-5">
                                <img src="{{ asset('assets/img/nota.jpg') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Jumlah Beli</th>
                                                <th>Nama Produk</th>
                                                <th>Satuan</th>
                                                <th>Harga Beli</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">1</td>
                                                <td>Indomie Goreng</td>
                                                <td>1/2 Dus</td>
                                                <td>Rp 56.000</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">1</td>
                                                <td>Teh Gelas</td>
                                                <td>Dus</td>
                                                <td>Rp 19.500</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                    <label>Tanggal : 6/8/2024 | ID Nota : BLW0001</label>
                </div>
            </div>
        </div>
    </main>
@endsection
