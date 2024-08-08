@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarBelanja">Daftar Belanja</a></li>
                <li class="breadcrumb-item active">Input Nota</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label>Daftar Input Nota</label>
                    <a href="/daftarBelanja" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Tanggal</th>
                                <th>ID Nota</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>6/8/2024</td>
                                <td>BLW0001</td>
                                <td class="text-center">
                                    <a href="/formInputNota" class="btn btn-success btn-sm"><i class="bi bi-cash-coin"></i></i>
                                        Input</a>
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
