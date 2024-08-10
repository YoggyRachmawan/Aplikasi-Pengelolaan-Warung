@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarProduk">Produk</a></li>
                <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label>Detail Produk</label>
                    <a href="/daftarProduk" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <h4 class="card-title fw-bold">Nama Produk</h4>
                                    <h5 class="card-text fw-lighter mb-lg-5">Indomie Goreng</h5>
                                    <h4 class="card-title fw-bold">Harga Modal</h4>
                                    <ul>
                                        <li class="card-text "><h5 class="fw-lighter">112.000 / Dus</h5></li>
                                        <li class="card-text "><h5 class="fw-lighter">56.000 / 1/2 Dus</h5></li>
                                        <li class="card-text "><h5 class="fw-lighter">29.000 / 1/4 Dus</h5></li>
                                    </ul>
                                    <h4 class="card-title fw-bold">Harga Jual</h4>
                                    <ul>
                                        <li class="card-text "><h5 class="fw-lighter">6.500 / 2 Bungkus</h5></li>
                                        <li class="card-text "><h5 class="fw-lighter">3.500 / Bungkus</h5></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
