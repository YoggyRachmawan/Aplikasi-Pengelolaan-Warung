@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label>Daftar Produk</label>
                    <a href="/inputProduk" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-card-list"></i>
                        Produk Baru
                    </a>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Produk</th>
                                <th>Foto Produk</th>
                                <th>Harga Modal</th>
                                <th>Harga Jual</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>Indomie Goreng</td>
                                <td class="text-center">
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" style="width : 100px; ">
                                    </button>
                                </td>
                                <td>112.000 / Dus<br>56.000 / 1/2 Dus<br>29.000 / 1/4 Dus</td>
                                <td>6.500 / 2 Bungkus<br>3.500 / Bungkus</td>
                                <td class="text-center">
                                    <a href="/editProduk" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i>
                                        Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" id="hapus"><i
                                            class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Indomie Goreng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('assets/img/indomie_goreng.jpg') }}" class="w-100">
                </div>
            </div>
        </div>
    </div>
@endsection
