@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Satuan Produk </label>
                    <button type="button" class="btn btn-primary btn-sm float-right ms-auto" data-bs-toggle="modal"
                        data-bs-target="#formTambahSatuanProduk"><i class="bi bi-file-plus"></i>
                        Tambah Satuan
                    </button>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-start">No</th>
                                <th>Satuan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start">1.</td>
                                <td>Dus</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start">2.</td>
                                <td>1/2 Dus</td>
                                <td class="text-center">
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

    {{-- modal form tambah satuan produk --}}
    <div class="modal fade" id="formTambahSatuanProduk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="formTambahSatuanProdukLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formTambahSatuanProdukLabel">Form Tambah Satuan Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="rext" class="form-control" id="satuan" value="">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
