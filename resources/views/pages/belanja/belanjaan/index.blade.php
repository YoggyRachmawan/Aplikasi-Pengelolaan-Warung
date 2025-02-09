@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanjaan</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label>Daftar Belanjaan</label>
                    <a href="/inputBelanjaan" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i
                            class="bi bi-card-list"></i>
                        Belanjaan Baru
                    </a>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Nota</th>
                                <th class="text-center">Tempat Belanja</th>
                                <th class="text-center">Total Harga</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="text-center">06/08/2024</td>
                                <td class="text-center">
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <img src="{{ asset('assets/img/nota.jpg') }}" style="width : 100px; ">
                                    </button>
                                </td>
                                <td class="text-center">Toko Abdi 2</td>
                                <td class="text-center">Rp 512.000</td>
                                <td class="text-center">
                                    <a href="/editBelanjaan" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Toko Abdi 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('assets/img/nota.jpg') }}" class="w-100">
                </div>
                <div class="modal-footer">
                    <p class="card-text"><small class="text-body-secondary">Tanggal : 06/08/2024</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
