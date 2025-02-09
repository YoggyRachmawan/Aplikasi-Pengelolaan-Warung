@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Keuangan</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Daftar Keuangan Harian </label>
                    <button type="button" class="btn btn-primary btn-sm float-right ms-auto" data-bs-toggle="modal"
                        data-bs-target="#formInputKeuangan"><i class="bi bi-cash"></i>
                        Input Keuangan
                    </button>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Omset</th>
                                <th class="text-center">Modal</th>
                                <th class="text-center">Laba</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="text-center">5/8/2024</td>
                                <td class="text-center">Rp 100.000</td>
                                <td class="text-center">Rp 85.000</td>
                                <td class="text-center">Rp 15.000</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-danger btn-sm" id="hapus"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    {{-- modal form input keuangan --}}
    <div class="modal fade" id="formInputKeuangan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="formInputKeuanganLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formInputKeuanganLabel">Form Input Keuangan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="tangal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tangal" value="8/8/2024">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="omset" class="form-label">Omset</label>
                                <input type="number" class="form-control" id="omset" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
