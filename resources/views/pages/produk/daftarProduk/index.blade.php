@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Daftar Produk </label>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Produk</th>
                                <th>Harga Modal</th>
                                <th>Harga Jual</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>Indomie Goreng</td>
                                <td>112.000 / Dus<br>56.000 / 1/2 Dus<br>29.000 / 1/4 Dus</td>
                                <td>6.500 / 2 Bungkus<br>3.500 / Bungkus</td>
                                <td class="text-center">
                                    <a href="/editProduk" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i> Ubah</a>
                                    <a href="/detailProduk" class="btn btn-info btn-sm"><i
                                            class="bi bi-file-earmark-text-fill"></i> Detail</a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
