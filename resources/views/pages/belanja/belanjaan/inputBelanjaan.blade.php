@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Belanjaan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarBelanjaan">Daftar Belanjaan</a></li>
                <li class="breadcrumb-item">Belanjaan Baru</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Form Belanjaan Baru</label>
                    <a href="/daftarBelanjaan" type="button" class="btn btn-warning btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="tanggalBelanja" class="form-label">Tanggal</label>
                        <input type="date" class="form-control form-control-sm" id="tanggalBelanja">
                    </div>
                    <div class="mb-3">
                        <label for="notaBelanja" class="form-label">Nota</label>
                        <input type="file" class="form-control form-control-sm" id="notaBelanja">
                    </div>
                    <div class="mb-3">
                        <label for="tempatBelanja" class="form-label">Tempat Belanja</label>
                        <select class="js-example-basic-single" style="width: 100%" name="state">
                            <option value="">--Pilih Tempat Belanja--</option>
                            <option value="AL">Toko Abdi 2</option>
                            <option value="WY">Toko ALan</option>
                            <option value="AL">Toko Ebit 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="totalHarga" class="form-label">Total Harga</label>
                        <input type="text" class="form-control form-control-sm" id="totalHarga">
                    </div>

                </div>
                <div class="card-footer d-flex">
                    <button type="submit" class="btn btn-success float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </main>
@endsection
